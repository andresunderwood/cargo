import 'package:flutter/material.dart';
import 'package:flutter/foundation.dart';
import 'package:shared_preferences/shared_preferences.dart';

const _kLocaleStorageKey = '__locale_key__';

class FFLocalizations {
  FFLocalizations(this.locale);

  final Locale locale;

  static FFLocalizations of(BuildContext context) =>
      Localizations.of<FFLocalizations>(context, FFLocalizations)!;

  static List<String> languages() => ['en', 'uk'];

  static late SharedPreferences _prefs;
  static Future initialize() async =>
      _prefs = await SharedPreferences.getInstance();
  static Future storeLocale(String locale) =>
      _prefs.setString(_kLocaleStorageKey, locale);
  static Locale? getStoredLocale() {
    final locale = _prefs.getString(_kLocaleStorageKey);
    return locale != null && locale.isNotEmpty ? createLocale(locale) : null;
  }

  String get languageCode => locale.toString();
  String? get languageShortCode =>
      _languagesWithShortCode.contains(locale.toString())
          ? '${locale.toString()}_short'
          : null;
  int get languageIndex => languages().contains(languageCode)
      ? languages().indexOf(languageCode)
      : 0;

  String getText(String key) =>
      (kTranslationsMap[key] ?? {})[locale.toString()] ?? '';

  String getVariableText({
    String? enText = '',
    String? ukText = '',
  }) =>
      [enText, ukText][languageIndex] ?? '';

  static const Set<String> _languagesWithShortCode = {
    'ar',
    'az',
    'ca',
    'cs',
    'da',
    'de',
    'dv',
    'en',
    'es',
    'et',
    'fi',
    'fr',
    'gr',
    'he',
    'hi',
    'hu',
    'it',
    'km',
    'ku',
    'mn',
    'ms',
    'no',
    'pt',
    'ro',
    'ru',
    'rw',
    'sv',
    'th',
    'uk',
    'vi',
  };
}

class FFLocalizationsDelegate extends LocalizationsDelegate<FFLocalizations> {
  const FFLocalizationsDelegate();

  @override
  bool isSupported(Locale locale) {
    final language = locale.toString();
    return FFLocalizations.languages().contains(
      language.endsWith('_')
          ? language.substring(0, language.length - 1)
          : language,
    );
  }

  @override
  Future<FFLocalizations> load(Locale locale) =>
      SynchronousFuture<FFLocalizations>(FFLocalizations(locale));

  @override
  bool shouldReload(FFLocalizationsDelegate old) => false;
}

Locale createLocale(String language) => language.contains('_')
    ? Locale.fromSubtags(
        languageCode: language.split('_').first,
        scriptCode: language.split('_').last,
      )
    : Locale(language);

final kTranslationsMap = <Map<String, Map<String, String>>>[
  // Home
  {
    '28p0nd0y': {
      'en': 'Home page',
      'uk': '',
    },
    'zuw34a6z': {
      'en': 'Home',
      'uk': '',
    },
  },
  // LoginPage
  {
    '1kmlwyfa': {
      'en': 'Page Title',
      'uk': '',
    },
    'buhhowew': {
      'en': 'Home',
      'uk': '',
    },
  },
  // Miscellaneous
  {
    'ljp1qozd': {
      'en': '',
      'uk': '',
    },
    'yz0mavb9': {
      'en': '',
      'uk': '',
    },
    'cwo40t7n': {
      'en': '',
      'uk': '',
    },
    '2va8ie9x': {
      'en': '',
      'uk': '',
    },
    'jn00raao': {
      'en': '',
      'uk': '',
    },
    'u087nk91': {
      'en': '',
      'uk': '',
    },
    'nnxkzecd': {
      'en': '',
      'uk': '',
    },
    '0g8p8cw4': {
      'en': '',
      'uk': '',
    },
    '5yotdwhz': {
      'en': '',
      'uk': '',
    },
    'bk59l3z5': {
      'en': '',
      'uk': '',
    },
    'nt7kkw6k': {
      'en': '',
      'uk': '',
    },
    '2m6xngak': {
      'en': '',
      'uk': '',
    },
    'odho78gt': {
      'en': '',
      'uk': '',
    },
    'rz2ddykl': {
      'en': '',
      'uk': '',
    },
    'wk59hun8': {
      'en': '',
      'uk': '',
    },
    'xeag9u62': {
      'en': '',
      'uk': '',
    },
    'ru1swklx': {
      'en': '',
      'uk': '',
    },
    'y7uzxmo4': {
      'en': '',
      'uk': '',
    },
    'ttilb6t4': {
      'en': '',
      'uk': '',
    },
    'n5zmfz6z': {
      'en': '',
      'uk': '',
    },
    'h2khjz4a': {
      'en': '',
      'uk': '',
    },
  },
].reduce((a, b) => a..addAll(b));
