class I18n {
    constructor() {
        this.currentLang = 'pt-BR'; // Default language
        this.translations = {};
        this.availableLangs = ['pt-BR', 'en', 'es', 'de', 'it'];
    }

    async init() {
        const savedLang = localStorage.getItem('i18n_lang');
        const browserLang = navigator.language;

        if (savedLang && this.availableLangs.includes(savedLang)) {
            this.currentLang = savedLang;
        } else if (this.availableLangs.includes(browserLang)) {
            this.currentLang = browserLang;
        } else {
            // Fallback for short codes (e.g. 'en-US' -> 'en')
            const shortLang = browserLang.split('-')[0];
            if (this.availableLangs.includes(shortLang)) {
                this.currentLang = shortLang;
            }
        }

        await this.loadTranslations(this.currentLang);
        this.updatePage();
        this.updateActiveFlag();
    }

    async loadTranslations(lang) {
        if (this.translations[lang]) return; // Already loaded

        try {
            const cacheBuster = new Date().getTime();
            const basePath = window.basePath || './';
            const response = await fetch(`${basePath}js/i18n/${lang}.json?v=${cacheBuster}`);
            if (!response.ok) throw new Error(`Could not load translations for ${lang}`);
            this.translations[lang] = await response.json();
        } catch (error) {
            console.error('I18n error:', error);
        }
    }

    async setLanguage(lang) {
        if (!this.availableLangs.includes(lang)) return;

        this.currentLang = lang;
        localStorage.setItem('i18n_lang', lang);

        await this.loadTranslations(lang);
        this.updatePage();
        this.updateActiveFlag();
    }

    translate(key) {
        const keys = key.split('.');
        let value = this.translations[this.currentLang];

        for (const k of keys) {
            if (value === undefined) return key;
            value = value[k];
        }

        return value || key;
    }

    updatePage() {
        document.documentElement.lang = this.currentLang;

        const elements = document.querySelectorAll('[data-i18n]');
        elements.forEach(el => {
            const keysString = el.getAttribute('data-i18n');
            if (!keysString) return;

            // Support multiple keys separated by semicolon: "[data-content]key1;key2"
            const bindings = keysString.split(';');

            bindings.forEach(binding => {
                binding = binding.trim();
                if (!binding) return;

                let key = binding;
                let attr = null;

                // Check for attribute binding syntax like [data-content]pricing.cards
                const match = binding.match(/^\[(.*?)\](.*)$/);
                if (match) {
                    attr = match[1];
                    key = match[2].trim();
                }

                const translation = this.translate(key);

                if (attr) {
                    el.setAttribute(attr, translation);
                } else if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                    el.placeholder = translation;
                } else {
                    el.innerHTML = translation; // Allow HTML in translations
                }
            });
        });
    }

    updateActiveFlag() {
        const langData = {
            'pt-BR': { label: 'PT', flag: '🇧🇷' },
            'en': { label: 'EN', flag: '🇺🇸' },
            'es': { label: 'ES', flag: '🇪🇸' },
            'de': { label: 'DE', flag: '🇩🇪' },
            'it': { label: 'IT', flag: '🇮🇹' }
        };

        const current = langData[this.currentLang] || { label: this.currentLang, flag: '' };
        const display = `${current.flag} ${current.label}`;

        // Support both IDs used across nav.php and nav-basic.php
        ['current-lang-label', 'current-lang-label-basic'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.innerHTML = display;
        });

        // Update dropdown items: add flag before text and highlight active
        document.querySelectorAll('.dropdown-item[onclick*="setLanguage"]').forEach(item => {
            item.classList.remove('active');
            const onclickAttr = item.getAttribute('onclick') || '';
            const match = onclickAttr.match(/setLanguage\('([^']+)'\)/);
            if (match) {
                const itemLang = match[1];
                if (itemLang === this.currentLang) {
                    item.classList.add('active');
                }
                // Prepend flag if not already there
                const data = langData[itemLang];
                if (data && !item.innerHTML.startsWith(data.flag)) {
                    item.innerHTML = `${data.flag} ${item.innerHTML}`;
                }
            }
        });

        document.dispatchEvent(new CustomEvent('i18n-changed', { detail: { lang: this.currentLang } }));
    }
}

const i18n = new I18n();

document.addEventListener('DOMContentLoaded', () => {
    i18n.init();
});
