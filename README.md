# Laravel test project

## Open the server folder and download with git
```console
git clone https://github.com/jordantsap/lioncode && cd lioncode
```
## You are in the folder you created so open .env file
## Create lioncode database  and run npm scripts
```console
npm install && npm run dev
```
## open new terminal in the repo folder and run artisan commands to setup the test project
```console
npm install && npm run dev && php artisan key:generate && php artisan migrate --seed
```
user details
## After above where successfull run server
```console
php artisan serve
```
# Login details # new
```
email: test@test.gr
passwd: 123456
```
## API endpoint # new
http://127.0.0.1:8000/api/companies
0
