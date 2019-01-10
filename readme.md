

## How to Run

1. Please config your mysql credentials 
2. Please run the latest migration
3. Optional: you can run seeder for demo data

## API List

<p>create: (post) : localurl/api/files</p>
<p>read all data : (get) : localurl/api/files</p>
<p>read single data : (get) : localurl/api/files/{fileId}</p>
<p>update : (put) : localurl/api/files/{fileId}</p>
<p>delete : (delete) : localurl/api/files/{fileId}</p>
<p>upload image : localurl/api/uploadfiles/{fileId}</p>

all request json format = 
{
	"username":"test",
	"email":"test",
	"image":"test"
}