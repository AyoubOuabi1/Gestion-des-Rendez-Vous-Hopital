
    <section class="mx-3 my-2">
        <div class="flex justify-between">
            <div class="flex items-center">
                <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="mr-2 fa fa-arrow-left"></i>Back</button>
                <h3 class="font-bold">My Session</h3>
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
        </div>



        <div class="mb-6 mr-5 font-medium">
            <h4 >My Sessions <span>(8)</span></h4>
        </div>

        <div>
            <form action="" class="p-2 border rounded mb-8">
            <div class="flex">
                <div class="flex mx-20 items-center">
                    <label class="mr-2" for="date">Date:</label>
                    <input class="block border rounded p-1 w-96" type="date" name="date" id="date">
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
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Sheduled Time & Date</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Max num that can be booked</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Events</th>
              </tr>
            </thead>
            <tbody>

            <?php

// $ssDoc = new Session("aze","0","0","1");
// $result = $ssDoc->selectSessionDoc();
// var_dump($result);
$result=session::selectSessionDoc();

          ?>
              
              <?php foreach($result as $row){
                ?>
              
              <tr>
                <td class="px-4 py-2 text-center"><?php echo $row['title']?></td>
                <td class="px-4 py-2 text-center"><?php echo $row['sessdate']?></td>
                <td class="px-4 py-2 text-center"><?php echo $row['maxNumber']?></td>
                <td class="px-4 py-2 text-center">
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-eye mr-2"></i>View</button>
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Remove</button>
                </td>
              </tr>
            
            <?php } ?>


            </tbody>
          </table>
    </section>