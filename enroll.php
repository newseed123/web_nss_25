<?php
include ( '../../TAILWINDCSS/config.php' );
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<link rel = 'icon' href = 'TAILWINDCSS/img/logo_nss_01.png'>
<meta charset = 'UTF-8' />
<link rel = 'stylesheet' href = 'main.css' />
<title>Form</title>
</head>
<body>
<form

class = 'max-w-md mx-auto relative top-20 font-extralight'
action = 'list.php'
method = 'POST'
style = 'font-family: Kh Battambang'
>
<div class = 'relative z-0 w-full mb-5 group'>
<input
type = 'email'
name = 'floating_email'
id = 'floating_email'

class = 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
placeholder = ' '
required
/>
<label
for = 'floating_email'

class = 'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6'
>អ៊ីមែល</label
>
</div>
<div class = 'relative z-0 w-full mb-5 group'>
<input
type = 'text'
name = 'floating_user'
id = 'floating_user'

class = 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
placeholder = ' '
required
/>
<label
for = 'floating_user'

class = 'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6'
>ឈ្មោះអ្នកប្រើប្រាស់</label
>
</div>
<div class = 'relative z-0 w-full mb-5 group'>
<input
type = 'password'
name = 'floating_password'
id = 'floating_password'

class = 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
placeholder = ' '
required
/>
<label
for = 'floating_password'

class = 'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6'
>ពាក្យសម្ថាត់</label
>
</div>
<div class = 'relative z-0 w-full mb-5 group'>
<input
type = 'password'
name = 'repeat_password'
id = 'repeat_password'

class = 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer'
placeholder = ''
required
/>
<label
for = 'repeat_password'

class = 'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6'
>បញ្ជាក់ពាក្យសម្ថាត់</label
>
</div>
<button
type = 'submit'

class = 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'
>
ចូលប្រើ
</button>
<h5 style = 'font-family: Khmer Moul' class = 'relative top-10 text-blue-800 text-center'>សាលាគ្រាប់ពូជថ្មីសូមស្វាគមន៍</h5>
</form>
</body>
</html>
