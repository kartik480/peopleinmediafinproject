# Deployment Guide (BigRock / Production)

## Pre-deploy checklist

- [ ] **.env** – Never commit `.env`. On the server, create `.env` from `.env.example` and set real values.
- [ ] **APP_KEY** – Must be set. Run `php artisan key:generate` once on server if needed.
- [ ] **APP_DEBUG=false** and **APP_ENV=production** on live.
- [ ] **APP_URL** – Set to your live URL, e.g. `https://pimfinance.info`.

---

## BigRock / cPanel steps

### 1. Document root

Point the domain’s **document root** to the `public` folder of the project:

- **Correct:** `.../peopleinmediafinproject/public`
- **Wrong:** `.../peopleinmediafinproject` (root must be `public`)

### 2. Upload files

Upload the whole project (e.g. via FTP/Git) **except**:

- `.env` (create it on the server)
- `node_modules/` (not needed if you don’t run frontend build on server)
- `.git/` (optional to skip)

### 3. Create .env on server

Copy `.env.example` to `.env` and set at least:

```env
APP_NAME="People in Microfinance"
APP_ENV=production
APP_KEY=base64:...   # from key:generate or copy from existing
APP_DEBUG=false
APP_URL=https://pimfinance.info

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=pimfi131_people_in_microfinance
DB_USERNAME=pimfi131_people_in_microfinance
DB_PASSWORD=your_password

SESSION_DRIVER=database
SESSION_SECURE_COOKIE=true
CACHE_STORE=database
QUEUE_CONNECTION=database
FILESYSTEM_DISK=public
```

### 4. Install dependencies (SSH)

If you have SSH access:

```bash
cd /path/to/your/project
composer install --no-dev --optimize-autoloader
```

If no SSH: upload a `vendor` folder built locally with `composer install --no-dev` (same PHP version as server).

### 5. Run Laravel commands (SSH)

```bash
php artisan key:generate    # only if APP_KEY is empty
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link    # if you use FILESYSTEM_DISK=public and public storage
```

If you don’t have SSH, run these locally with `.env` pointing to the **production** DB (temporarily and carefully) or use BigRock’s “Run PHP script” / cron to run Artisan if available.

### 6. Permissions (SSH/Linux)

Ensure the web server can write to:

```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache   # user may differ on BigRock
```

On BigRock, the user might be `nobody`, `apache`, or your FTP user; adjust accordingly.

### 7. After deploy

- Open `https://pimfinance.info` and test main pages, Member, Loans, Contact, Apply.
- In browser DevTools (Console), confirm no mixed-content or 403 errors.
- If the host injects scripts (e.g. ad scripts), disable them in the hosting panel or ask support to remove them.

---

## Already fixed in this project

- **HTTPS** – `AppServiceProvider` forces `https` in production; `public/.htaccess` redirects HTTP → HTTPS (except localhost).
- **Session cookies** – `config/session.php` sets `secure` cookie in production.
- **.env** – In `.gitignore`; secrets stay off Git.
- **No mixed content** – No `http://` scripts in views (only SVG namespace URLs, which are safe).

---

## If something breaks

- **500 error** – Check `storage/logs/laravel.log`; ensure `storage` and `bootstrap/cache` are writable.
- **Blank page** – Set `APP_DEBUG=true` **temporarily** to see the error, then set back to `false`.
- **CSS/JS missing** – This app uses inline styles; if you add Vite/mix later, run `npm run build` and set `ASSET_URL` if needed.
- **Session/login issues** – Confirm `SESSION_SECURE_COOKIE=true` and `APP_URL` is correct; run `php artisan config:clear` and `php artisan cache:clear`.
