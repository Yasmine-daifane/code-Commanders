<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <form action="{{ Route('form.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
          <div class="formbold-steps">
              <ul>
                  <li class="formbold-step-menu1 active">
                      <span>1</span>
                      Personel Informations
                  </li>
                  <li class="formbold-step-menu2">
                      <span>2</span>
                      Consomation Informations
                  </li>
              </ul>
          </div>

          <div class="formbold-form-step-1 active">

  <div>
    <link rel="stylesheet" href="https://cdn.formbold.com/formbold.css" />

    <div class="formbold-builder-form themeThree">

        <div class="SortableItem fb-builder-item">
          <div class="mb-1">
            <label class="mb-2.5 block text-base text-black"
              ><span> Name</span
              ><span class="label-required pl-1 text-red-400">*</span></label
            ><input
              type="text"
              class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
              name="Nom"
              placeholder="Mohamed El aassal"
              required=""
            />
          </div>
        </div>
        <div class="SortableItem fb-builder-item">
          <div class="mb-1">
            <label class="mb-2.5 block text-base text-black"
              ><span>  Address </span
              ><span class="label-required pl-1 text-red-400">*</span></label
            ><input
              type="text"
              class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
              name="addresse"
              placeholder="52 U.S california"
              value=""
              required=""
            />
          </div>
        </div>

        <div class="SortableItem fb-builder-item">
            <div class=>
              <label class="mb-2.5 block text-base text-black"
                ><span>  Birthday</span
                ><span class="label-required pl-1 text-red-400">*</span></label
              >
              <div class="w-full">
                <input
                  type="date"
                  name="datenaissance"
                  placeholder="mm/dd/yyyy"
                  class="block w-full rounded border border-stroke bg-white px-5 py-3 text-base text-body-color outline-none focus:border-primary"
                  value=""
                />
              </div>
            </div>
          </div>

        <div class="SortableItem fb-builder-item">
          <div class="mb-4">
            <label class="mb-2.5 block text-base text-black"
              ><span>  image</span></label
            >
            <div class="image-upload-container">
              <div>
                <input
                  name="image"
                  type="file"
                  class="w-full rounded border border-stroke p-3 text-body-color outline-none transition file:mr-4 file:rounded file:border-[.5px] file:border-stroke file:bg-[#EEEEEE] file:px-[10px] file:py-1 file:text-sm file:font-medium focus:border-primary file:focus:border-primary disabled:cursor-default disabled:bg-[#F5F7FD] active:border-primary"
                />
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  </div>
          <div class="formbold-form-step-2">
           <div>


    <div class="formbold-builder-form themeThree">


        <div class="SortableItem fb-builder-item">
            <div class="mb-1">
              <label class="mb-2.5 block text-base text-black"
                ><span> Food expenses</span
                ><span class="label-required pl-1 text-red-400">*</span></label
              ><input
                type="text"
                class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
                name="categories[0][quantiteConsommation]"
                placeholder="500L"
                value=""
                required=""
              />
            </div>
          </div>


        <div class="SortableItem fb-builder-item">
            <div class="mb-1">
              <label class="mb-2.5 block text-base text-black"
                ><span>  Electricity expenses</span
                ><span class="label-required pl-1 text-red-400">*</span></label
              ><input
                type="text"
                class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
                name="categories[1][quantiteConsommation]"
                placeholder="100L"
                value=""
                required=""
              />
            </div>
          </div>



          <div class="SortableItem fb-builder-item">
            <div class="mb-1">
              <label class="mb-2.5 block text-base text-black"
                ><span>  Water expenses </span
                ><span class="label-required pl-1 text-red-400">*</span></label
              ><input
                type="text"
                class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
                name="categories[2][quantiteConsommation]"
                placeholder="30L"
                value=""
                required=""
              />
            </div>
          </div>

          <div class="SortableItem fb-builder-item">
            <div class="mb-1">
              <label class="mb-2.5 block text-base text-black"
                ><span>  Clothes expenses </span
                ><span class="label-required pl-1 text-red-400">*</span></label
              ><input
                type="text"
                class="w-full rounded border border-stroke bg-white px-5 py-3 text-base text-black outline-none focus:border-primary"
                name="categories[3][quantiteConsommation]"
                placeholder="5L"
                value=""
                required=""
              />
            </div>
          </div>

          <div class="formbold-form-btn-wrapper">
            <button class="formbold-back-btn">
              Back
            </button>

            <button class="formbold-btn">
                Next Step
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1675_1807)">
                <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_1675_1807">
                <rect width="16" height="16" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            </button>
<!-- Votre code de formulaire ici -->

<button type="submit" class="formbold-btn-enregister" style="display: none">Enregistrer</button>

          </div>
</form>
    </div>
  </div>
@vite('resources/css/form.css')

  @vite('resources/js/form.js')

