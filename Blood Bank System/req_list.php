<?php 

    include "logic.php";
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <title>Request List Page</title>
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
          <?php foreach ($query_request as $q) { ?>
                      <tr>
                          <td class="px-4 py-3" ><?php echo $q['requester']?></td>
                          <td class="px-4 py-3" ><?php echo $q['hosp_provider']?></td>
                          <td class="px-4 py-3" ><?php echo $q['blood_group']?></td>
                      </tr>
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


