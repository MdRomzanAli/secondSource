Hello .Welcome to Md.Romzan Ali Task for second Source 


### 1. Clone the Repository


git clone  https://github.com/MdRomzanAli/secondSource
cd secondSource


### 2. Install Dependencies

composer install

### 3. Environment Setup
Copy .env.example to .env and update database credentials:

Generate app key:

php artisan key:generate


### 4. Run Migrations

php artisan migrate

### 5. Serve the Application

php artisan serve

 
### use postman app to check api input and output
# for the 1st task

POST your_localhost_surver_url/api/posts
like:localhost:8000/api/posts
method:POST 

Body:
{
  "title": "My First Post",
  "content": "This is my content."
}


GET your_localhost_surver_url/api/posts
method:GET

Response:

[
  {
    "id": 1,
    "title": "My First Post",
    "content": "This is my content.",
    "created_at": "2024-12-18T10:00:00Z"
  }
]


# for the 2nd task
POST your_localhost_surver_url/api/register
method:POST

Body:

{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}


Response:
{
  "id": 1,
  "name": "Jane Doe",
  "email": "jane@example.com",
  "created_at": "2024-12-18T10:00:00Z"
}

# for the 3rd task
POST your_localhost_surver_url/api/tasks
method:POST

Body:

{
  "title": "Finish Laravel test"
}


PATCH your_localhost_surver_url/api/tasks/{id}
method:PATCH
Body:

{
  "is_completed": true
}

Fetch all tasks where is_completed is false.

GET your_localhost_surver_url/api/tasks/pending
method:GET
Response:
[
  {
    "id": 2,
    "title": "Review Laravel code",
    "is_completed": false,
    "created_at": "2024-12-18T10:05:00Z"
  }
]
