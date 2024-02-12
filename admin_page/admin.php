 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="/src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/style/admin.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-sm mx-auto" > 
            <p class="text-3xl text-gray-900 dark:text-black text-center block mb-4 block mt-4">Post Events and News </p>
            <form class="upl"  action="">
            <div class="mb-3">  
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Title</label>
                <input type="text" id="title" name="title" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
            <textarea id="description" rows="4" name="description"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your describtion here"></textarea>
            <button type="button" name="btnsubmit" id="btnsubmit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 block mt-2 ms-auto">Submit</button>
            </form>
    </div>
    <script>
        $(document).ready(function(){
            $('.btnsubmit').click(function(){
                var eThis = $(this);
                var frm = eThis.closest('form.upl');
                var frm_data = new FormData(frm[0]);
                $.ajax({
                    url:'action/home_page/home.php',
                    type:'POST',
                    data:frm_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    dataType:"json",
                    beforeSend:function(){
                            //work before success    
                    },
                    success:function(data){   
                            //work after success        
                    }				
                }); 
            })
        })
    </script>
    

</body>
</html>