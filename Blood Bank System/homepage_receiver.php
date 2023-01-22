<?php 

    include "logic.php";
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <title>Receiver HomePage</title>
</head>
<body>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Samples Available:</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
   
      <table id="request_table" class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Hospital Name</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Blood Group</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Request Blood</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($query_sample as $q) { ?>
                    <form method="POST">
                      <tr>
                          <td class="px-4 py-3" ><?php echo $q['sample_provider']?></td>
                          <td class="px-4 py-3" ><?php echo $q['blood_sample']?></td>
                          <td class="w-10 text-center">
                          <a href="?provider_list_ID=<?php echo $q['ID'] ?>" class="text-indigo-500 inline-flex items-center mt-4">Request Blood
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                          </td>
                      </tr>
                    </form>
          <?php } ?>
        </tbody>

      </table>
      
    </div>
    
  </div>
 
</section>

</body>
</html>

</body>
</html>


