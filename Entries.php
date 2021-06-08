<!DOCTYPE html>
<?php
session_start();
require_once('C:\xampp\htdocs\dist\db-config\config.php');
include('security.php');
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
th{
   margin-left:200px;
   border:6px solid black;
}

tr{
   border:3px solid black;
}

</style>
    <body class=" box-border font-sans  bg-none bg-cover bg-no-repeat">


      <div class="relative min-h-screen md:flex">

        
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
    
          <a href="#" class="block p-4 text-white font-bold">Diary</a>
   
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        
      
        <!-- sidebar -->
        <div class="sidebar bg-blue-800 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out fixed z-10">
      
          <!-- logo -->
          <a href="#" class="text-white flex items-center space-x-2 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
            </svg>
            <span class="text-2xl font-extrabold">Diary</span>
          </a>
      
          <!-- nav -->
          <nav>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-user" style="font-size:24px"></i>
              <?php echo $_SESSION['username'] ?>
            </a>
            <a href="http://localhost/dist/pjournal.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-book"></i> Personal Journal
            </a>
            <a href="http://localhost/dist/work-journal.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-book"></i> Work Journal
            </a>
            <a href="http://localhost/dist/Entries.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-edit"></i> Entries
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-calendar"></i> <?php echo $_date = date("Y/m/d") ?>
            </a>
            <a href="logout.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
              <i class="fa fa-sign-out" style="font-size:24px"></i> Logout
             
             </a>
          </nav>
          
        </div>


       
      
        <!-- content -->
        <div class="flex-1   font-bold">
            <h3 class="text-center text-white text-4xl font-medium">Entries for Personal Journal</h3>
            <!-- Form-->
            <form action="Entries.php" method="post">
            <div class="ml-96 text-2xl py-3.5">
            <div class="h-full w-2/4  bg-blue-200 opacity-75 border-4-solid-gray">
            <table class="border-collapse w-full text-black text-2xl text-medium ">
              <tr>
                <th>Your Entries</th>
                <th><?php echo $_date = date("Y/m/d") ?></th>
              </tr>
              <?php
              $sql = "SELECT textbox FROM homepage";
              $result = $con->query($sql);
            
              if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["textbox"]."</td></tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                $con->close();
              ?>
            </table>
            </div>
            </form>
      </div>

     
        <script src="" async defer></script>
    </body>
</html>