# brand-api
CRUD operations API for managing brands

## Requirements
Make sure to have installed
- PHP 8.0+
- MySQL 5.7+
- Apache 2.4+
- Git Lastest

## Project structure
```
brand-api/
|---- public/                  # Main entry
        (index.php)
|---- config/                  # Configuration
        (database.php)
|---- src/                     # PHP source
      |---- class/
      |---- controller/
      |---- routes/
      |---- utils.function.php # PHP functions
```

## Features
- PHP based api
- MySQL database integration
- Easy deployment

## Installation
1. Clone the repository
<code>
git clone https://github.com/PSAUM-dev/brand-api.git    
</code>
2. Move the project ( to <code>/var/www/html</code> on linux <code>htdocs/www</code> on window using XAMP )

## Usage

### 1. Get all brands list
GET
<code>http://[Your_Host]/brands</code>

### 2. Get brand by its ID
GET
<code>http://[Your_Host]/brands/{brand_id}</code>

### 3. Delete brand
DELETE
<code>http://[Your_Host]/brands/{brand_id}</code>

### 4. Update brand
PUT
<code>http://[Your_Host]/brands/{brand_id}</code><br />
sending raw data in the json format containing informations you want to update.<br />
<u>For example :</u><br />
<code>
{
    brand_name : "My new brand name"
}
</code><br/> if i only want to update the brand name

### 4. Create brand
POST
<code>http://[Your_Host]/brands/{brand_id}</code><br />
sending raw data in the json format containing informations about the brand you want to create.<br />
<u>For example :</u><br />
```
{
    "brand_name": "New brand",
    "brand_image": "https://www.myimage.com/image.jpg",
    "rating": 4.5,
    "country_code" : "FR"
}
```
<b>Also support multiple brand creation</b> by sending array of data<br/>
<u>For example :</u><br />
```
[
    {
        "brand_name": "New brand 1",
        "brand_image": "https://www.myimage.com/image.jpg",
        "rating": 4.5,
        "country_code" : "FR"
    },

    {
        "brand_name": "New brand 2",
        "brand_image": "https://www.myimage.com/image.jpg",
        "rating": 4.5,
        "country_code" : "FR"
    }
]
```