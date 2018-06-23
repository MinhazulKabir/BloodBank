## Laravel Blood Bank Management System
* Laravel Framework 5.6
* Bootstrap 4

### Installation 

* `git clone https://github.com/MinhazulKabir/BloodBank.git projectname`
* `cd projectname`
* `composer install`
* `composer update`
* `php artisan key:generate`
*  Prepare your .env file there with database connection and other settings. 
* `php artisan migrate --seed` to create and populate tables. **Notice: seed is important, because it will create admin user for you**
* `php artisan vendor:publish` to publish filemanager
* `php artisan serve` to start the app on http://localhost:8000/

### Features
* Home Page
* Error Page 404
* Search in Donar Blood Group
* Search in Donar Location
* Blog with [Facebook](http://facebook.com) comments
* Search in Blog Name
* Manuel page
* Contact us page
* About us page
* Authentication (login, logout)
* Users roles : administrator (All access and Create other user), Simple user (create their own Donar profile)
* Users admin (show, edit, delete, create)
* About Donar and Blog Post  with [CKEditor](http://ckeditor.com).


## Front-end view 

### Home Page
![Home](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBank.png)

### Donar Page
![Donar](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankD.png)

### Donar Profile
![DonarP](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankDP.png)

### Blog Page
![Blog](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankB.png)

### Post Page
![Post](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankBP.png)

### 404 Page
![Page](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBank404.png)

### About Us Page
![About](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankA.png)

### Contact Us Page(Responsive Mobile Design)
![Contact](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankC.png)

### Manuel Page
![Manuel](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankM.png)

 ### LogIn Page
![LogIn](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankL.png)


## Back-end view 

Credentials to log in:

Link: https://YourDomain/login Or 

http://localhost:8000/login


Email: admin@admin.com

Password: **password**

### DashBoard Page
![DashBoard](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankDB.png)

### User Page
![User](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankU.png)

### Donar Profile index Page
![Donarindex](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankAD.png)

### Create Donar Profile Page
![CreateDonar](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankCD.png)

### Blog index Page
![Blogindex](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankAB.png)

### Create Blog Page
![CreateBlog](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankBC.png)

### Change Password
![Change](https://raw.githubusercontent.com/MinhazulKabir/BloodBank/master/MinhazulKabirAppPicture/BloodBankCP.png)



### License

Please use and re-use however you want.


## More from BloodBank Project
- Follow My [Twitter](https://twitter.com/mminhazulkabir) and [Facebook](https://www.facebook.com/MinhazulKabir)
- Email Me kabir110409@acc.edu.bd
- One user can see others profile. You can solve this problem. 
- You can show the available Blood in these project.
- You will insert your [Facebook](http://facebook.com) comments using [FacebookDevekoper](https://developers.facebook.com/) . Note: because of some unavoidable problem My [Facebook](http://facebook.com) comments do not work properly(properly).