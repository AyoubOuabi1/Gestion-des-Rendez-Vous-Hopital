
    <section class="mx-3 my-2">
        <div class="flex justify-between">
            <div class="flex items-center">
                <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="mr-2 fa fa-arrow-left"></i>Back</button>
                <h3 class="font-bold">Schedule manager</h3>
            </div>

            <div class="flex items-center">
                <div>
                    <p class="text-slate-400">Today's Date</p>
                    <h3 class="font-bold">2022-12-02</h3>
                </div>

                <div class="mx-2">
                    <i class="fa fa-calendar-alt bg-slate-100 p-3 rounded"></i>
                </div>
            </div>
        </section>

        <section class="mx-10">
        <div class="mt-10 flex">
            <h4>Schedule a Session</h4>
            <div>
            <button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>


                <!-- Button trigger modal -->
 

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">


      <form method="POST">
                        
                        <div class="form-group mb-6">
                          <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">title</label>
                          <input name="title" type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">

                        </div>

                        <div class="form-group mb-6">
                          <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Session time</label>
                          <input name="date" type="date" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group mb-6">
                          <label for="exampleInputEmail3" class="form-label inline-block mb-2 text-gray-700">maxnum</label>
                          <input name="maxNum" type="number" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail3"
                            aria-describedby="emailHelp" placeholder="Enter email">

                        </div>

                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
<select name="doc" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a doctor</option>


  <?php
            $result1=Doctor::selecetDoctors();
?>
<?php

foreach($result1 as $row){
                ?>
  <option value="<?= $row['id'] ?>"> <?php echo $row['firstName'] .' '. $row['lastName']  ?></option>
<?php }
?>
</select>

                            </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form>

                  <?php
                    if( isset($_POST['submit'])){
                      $title = $_POST['title'];
                      $date = $_POST['date'];
                      $maxNum = $_POST['maxNum'];
                      $doc = $_POST['doc'];

                      $ss1 = new Session($title,$date,$maxNum,$doc);
                      $ss1->addSession();
                    }?>






            </div>
        </div>

        <div class="mb-6">
            <h4>All Sessions <span>(8)</span></h4>
        </div>

        <div>
            <form action="" class="p-2 border rounded mb-8">
            <div class="flex">
                <div class="flex mx-20 items-center">
                    <label class="mr-2" for="date">Date:</label>
                    <input class="block border rounded p-1 grid grid-cols-4" type="date" name="date" id="date">
                </div>

                <div class="flex mx-20 items-center">
                    <label class="mr-2" for="doctor">Doctor:</label>
                    <select class="block border rounded p-1 grid grid-cols-4" name="doctor" id="doctor">
                        <option value="doctor1">Choose Doctor Name from the list</option>
                    </select>
                </div>
            

                <div>
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fas fa-filter mr-2"></i>Filter</button>
                </div>
            </div>
            </form>
        </div>

        <table class="table-fixed border w-full">
            <thead>
              <tr>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Session Title</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Sheduled Time & Date</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Max num that can be booked</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Events</th>
              </tr>
            </thead>
            <tbody>

<?php
            $result=session::selectSession();
?>

<?php foreach($result as $row){
                ?>
              <tr>
                <td class="px-4 py-2 text-center"><?php  echo $row['title']  ?></td>
                <td class="px-4 py-2 text-center"><?php echo $row['fn'] .' '. $row['ln']  ?></td>
                <td class="px-4 py-2 text-center"><?php  echo $row['sessdate']  ?></td>
                <td class="px-4 py-2 text-center"><?php  echo $row['maxNumber']  ?></td>
                <td class="px-4 py-2 text-center">
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-eye mr-2"></i>View</button>
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Remove</button>
                </td>
              </tr>
 <?php }  ?>
            </tbody>
          </table>
        </section>