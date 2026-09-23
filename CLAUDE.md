# IPEMALIS Website

PHP MVC web application for IPEMALIS organization (Jakarta-based community of Bengkalis students in Jabodetabek).

## Tech Stack

- **Backend**: PHP 8+
- **Database**: MySQL (IPEMALIS_DB)
- **Styling**: Tailwind CSS v4
- **Build**: @tailwindcss/cli
- **Utilities**: nanoid, picocolors

## Project Structure

```
src/
├── Controllers/          # Controller classes (App\Controllers\*)
├── Core/                 # Core classes (Routes, Controller base)
├── Models/               # Data models (Member, User)
├── Views/                # PHP view templates
│   ├── templates/        # Shared header/footer
│   ├── datacollection/   # Data collection pages
│   └── [page]/           # Page-specific views
├── assets/css/           # Source Tailwind CSS
config/
├── database.php          # MySQL configuration
public/
├── css/style.css         # Compiled Tailwind CSS
├── js/                   # JavaScript files
└── img/                  # Static images
```

## Commands

```bash
npm run dev    # Watch mode - compiles CSS on changes
npm run build  # Production build with minification
```

## Local Development

```bash
php -S localhost:8000 -t public
```

Then open **http://localhost:8000**

## Pages

| Route | Controller | Description |
|-------|------------|-------------|
| `/` | Home | Homepage |
| `/about` | About | About IPEMALIS |
| `/team` | Team | Team members |
| `/activities` | Activities | Activities & events |
| `/news` | News | News articles |
| `/joinus` | Joinus | Join us page |
| `/datacollection` | Datacollection | Student data collection forms |

## Key Conventions

### Controllers
- Location: `src/Controllers/{Name}.php`
- Namespace: `App\Controllers`
- Extend: `App\Core\Controller`
- Default method: `index()`

### Views
- Location: `src/Views/{path}.php`
- Called via `$this->view('path', $data)`
- Use `BASE_URL` constant for asset paths
- Wrap main content in `<main class="pt-20 lg:pt-24">`

### Routing
- URL pattern: `/{controller}/{method}/{param1}/{param2}/...`
- Default controller: `Home`
- 404 fallback: `NotFound` controller

### Database
- Config: `config/database.php`
- Connection: `src/helpers/db.php`
