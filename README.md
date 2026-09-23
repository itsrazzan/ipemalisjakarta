# IPEMALIS Website

Website for IPEMALIS Jakarta — Ikatan Pemuda Mahasiswa Kabupaten Bengkalis Jakarta. A community organization for Bengkalis students studying in the Jabodetabek area.

## Tech Stack

- **Backend**: PHP 8+
- **Database**: MySQL (IPEMALIS_DB)
- **Styling**: Tailwind CSS v4
- **Build Tool**: @tailwindcss/cli
- **Utilities**: nanoid, picocolors

## Getting Started

### Prerequisites

- PHP 8+ installed
- Node.js and npm for CSS compilation
- MySQL database (optional, for dynamic features)

### Installation

1. Clone the repository
2. Install dependencies:

```bash
npm install
```

3. Configure database (if needed):
   - Edit `config/database.php` with your MySQL credentials

4. Start local server:

```bash
php -S localhost:8000 -t public
```

5. Open **http://localhost:8000** in your browser

### CSS Development

```bash
npm run dev    # Watch mode - compiles CSS on changes
npm run build  # Production build with minification
```

## Project Structure

```
src/
├── Controllers/          # PHP controller classes
├── Core/                 # Core classes (Routes, Controller base)
├── Models/               # Data models
├── Views/                # PHP view templates
│   ├── templates/        # Shared header/footer
│   └── [page]/           # Page-specific views
├── assets/css/           # Source Tailwind CSS
config/
├── database.php          # MySQL configuration
public/
├── css/style.css         # Compiled Tailwind CSS
├── js/                   # JavaScript files
└── img/                  # Static images
```

## Pages

| Route | Description |
|-------|-------------|
| `/` | Homepage |
| `/about` | About IPEMALIS |
| `/team` | Team members |
| `/activities` | Activities & events |
| `/news` | News articles |
| `/joinus` | Join us information |
| `/datacollection` | Student data collection forms |

## Key Conventions

### Adding a New Page

1. **Create Controller** in `src/Controllers/{Name}.php`:
```php
<?php
namespace App\Controllers;
use App\Core\Controller;

class PageName extends Controller {
    public function index() {
        $data['title'] = "Page Title | IPEMALIS Jakarta";
        $this->view('templates/header', $data);
        $this->view('pagename/index', $data);
        $this->view('templates/footer');
    }
}
```

2. **Create View** in `src/Views/pagename/index.php`:
   - Content goes inside `<main class="pt-20 lg:pt-24">...</main>`
   - Use `<?php echo $BASE_URL; ?>` for asset paths
   - Follow existing page styling patterns

3. **Add Navigation** in `src/Views/templates/header.php`:
   - Desktop nav: Add `<li>` inside the `<ul>` near line 183
   - Mobile nav: Add `<li>` inside the mobile menu `<ul>`

### Database Configuration

Edit `config/database.php`:
```php
return [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'IPEMALIS_DB',
];
```

## License

&copy; 2026 IPEMALIS Jakarta. All rights reserved.
