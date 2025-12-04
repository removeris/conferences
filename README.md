## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/removeris/conferences.git
cd conferences
```
### 2. Install Dependencies
```bash
composer install
```
### 3. Configure Environment
```bash
cp .env.example .env
```
### 4. Edit .env according to your DB credentials
```bash
DB_DATABASE=cookshare
DB_USERNAME=root
DB_PASSWORD=
```
### 5. Run Migrations
```bash
php artisan migrate
```
### 6. Start Server
```bash
composer run dev
```
### 7. Access locally
127.0.0.1:8000 or localhost:8000