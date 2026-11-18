# 🚴 Site VCR 2027 — « Toutes les routes démarrent du vélodrome »

Nouveau site du Vélo Club Roubaix / Van Rysel Roubaix, construit en interne sur WordPress.

## 👀 Voir et modifier le site (sans hébergement)

**[Ouvrir dans WordPress Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/vrr-ops/site-vcr/main/blueprint.json)**

- Le site complet tourne dans le navigateur, avec l'administration (connecté automatiquement).
- Chaque ouverture repart de la version du dépôt : les modifications faites dans Playground ne sont pas enregistrées ici.

## 📁 Contenu du dépôt

| Dossier | Rôle |
|---|---|
| `theme/vcr-2027/` | Le thème WordPress (design, gabarits, coureurs) — à installer tel quel sur l'hébergement final |
| `playground/site.zip` | Instantané complet (contenu + images + réglages) pour l'aperçu Playground |
| `content/` | Export WordPress (WXR) du contenu, importable via Outils › Importer |
| `blueprint.json` | Recette de l'aperçu Playground |

## 🚀 Le jour de la mise en ligne

1. Installer `theme/vcr-2027` (zip) sur le WordPress de production.
2. Importer le contenu, ou migrer l'instantané complet avec une extension de migration.
3. Vérifier les redirections et l'indexation.
