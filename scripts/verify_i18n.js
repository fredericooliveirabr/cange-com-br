const fs = require('fs');
const path = require('path');

const langs = ['pt-BR', 'en', 'es', 'de', 'it'];
const baseLang = 'pt-BR';

function flatten(obj, prefix = '') {
    let result = {};
    for (const key in obj) {
        if (typeof obj[key] === 'object' && obj[key] !== null) {
            result = { ...result, ...flatten(obj[key], `${prefix}${key}.`) };
        } else {
            result[`${prefix}${key}`] = obj[key];
        }
    }
    return result;
}

const translations = {};
langs.forEach(lang => {
    const content = fs.readFileSync(path.join(__dirname, `../js/i18n/${lang}.json`), 'utf8');
    translations[lang] = JSON.parse(content);
});

const baseKeys = Object.keys(flatten(translations[baseLang]));
let hasError = false;

langs.forEach(lang => {
    if (lang === baseLang) return;

    const targetKeys = Object.keys(flatten(translations[lang]));
    const missing = baseKeys.filter(k => !targetKeys.includes(k));

    if (missing.length > 0) {
        console.error(`[FAIL] ${lang} is missing keys:`, missing);
        hasError = true;
    } else {
        console.log(`[PASS] ${lang} has all keys.`);
    }
});

if (hasError) process.exit(1);
