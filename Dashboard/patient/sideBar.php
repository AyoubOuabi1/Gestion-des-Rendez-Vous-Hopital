<section>
        <div class="h-screen shadow-md ">
          <div class="flex flex-col text-center my-8">
            <div class="flex  place-content-center">
              <div
                      class="rounded-full mr-3 bg-black"
                      style="width: 50px; height: 50px"
              ></div>
              <div>
          <p class="font-bold text-lg">Hanane Hanane</p>
          <p>hanane@youcode.com</p>
        </div>
      </div>
      <div>
        <button
                class="my-12 bg-blue-400 hover:bg-cyan-500 text-blue-900 font-bold rounded px-20 py-1"
                type="button"
        >
          log out
        </button>
            </div>
            <div
                    class="mb-8 self-center bg-stone-200"
                    style="width: 90%; height: 2px"
            ></div>
          </div>
      
          <div>
            <ul class="text-white list-unstyled ml-10 text-base">
              <li class="font-semibold py-6" style="cursor: pointer">
                <a class="text-black hover:text-cyan-500 flex" title="" onclick="changePatientDashIntoHomePage()">
                  <img class="px-3" src="../../img/icons/home.svg"> Home
                </a>
              </li>
              <li class="font-semibold py-6"  style="cursor: pointer">
                <a class="hover:text-cyan-500 text-black flex" title="" onclick="changePatientDashIntoDoctorsPage()"
                ><img class="px-3" src="../../img/icons/doctors.svg"/>
                  All Doctors</a>
              </li>
              <li class="font-semibold py-6"  style="cursor: pointer">
                <a class="hover:text-cyan-500 text-black flex " title="" onclick="changePatientDashIntoSessionsPage()"
                ><img class="px-3" src="../../img/icons/session.svg"/> Scheduled sessions
                </a>
              </li>
              <li class="font-semibold py-6"  style="cursor: pointer">
                <a class="hover:text-cyan-500 text-black flex" title="" onclick="changePatientDashIntoBookingsPage()"
                ><img class="px-3" src="../../img/icons/book.svg"/>
                  My bookings
                </a>
              </li>
              <li class="font-semibold py-6"  style="cursor: pointer">
                <a class="hover:text-cyan-500 text-black flex" title="" onclick="changePatientDashIntoSettingsPage()"
                ><img class="px-3" src="../../img/icons/settings.svg"> Settings</a>
              </li>
            </ul>
          </div>
        </div>
      
      </section>
