<?php 

    include "logic.php";
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <title>Hospital HomePage</title>
</head>
<body>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Upload Available Blood Samples Records</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <form method="POST"> 
      <div class="flex flex-wrap -m-2">
        
      <div class="p-2 w-1/2">
            <div class="relative">
                <label for="available_bloodGroup">Blood Group Available:</label>
                    <select name="available_bloodGroup" id="available_bloodGroup">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
            </div>
          </div>
        <div class="p-2 w-full">
          <button type="submit" name="Upload" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Upload Records</button>
        </div>
        <div class="p-2 w-full">
          <button type="submit" name="get_reqList" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Blood Requests List</button>
        </div>
        <div class="p-2 w-full">
          <a href="logout.php" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Logout Session</a>
        </div>
        </form>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500"></a>
          <p class="leading-normal my-5">
          </p>
          
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
