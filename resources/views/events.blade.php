<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
      <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Product name
              </th>
              <th scope="col" class="px-6 py-3">
                  Color
              </th>
              <th scope="col" class="px-6 py-3">
                  Category
              </th>
              <th scope="col" class="px-6 py-3">
                  Price
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-blue-600 border-b border-blue-400 hover:bg-blue-500">
              <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                  Apple MacBook Pro 17"
              </th>
              <td class="px-6 py-4">
                  Silver
              </td>
              <td class="px-6 py-4">
                  Laptop
              </td>
              <td class="px-6 py-4">
                  $2999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-white hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-blue-600 border-b border-blue-400 hover:bg-blue-500">
              <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                  Microsoft Surface Pro
              </th>
              <td class="px-6 py-4">
                  White
              </td>
              <td class="px-6 py-4">
                  Laptop PC
              </td>
              <td class="px-6 py-4">
                  $1999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-white hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-blue-600 border-b border-blue-400 hover:bg-blue-500">
              <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                  Magic Mouse 2
              </th>
              <td class="px-6 py-4">
                  Black
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $99
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-white hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-blue-600 border-b border-blue-400 hover:bg-blue-500">
              <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                  Google Pixel Phone
              </th>
              <td class="px-6 py-4">
                  Gray
              </td>
              <td class="px-6 py-4">
                  Phone
              </td>
              <td class="px-6 py-4">
                  $799
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-white hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-blue-600 border-blue-400 hover:bg-blue-500">
              <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                  Apple Watch 5
              </th>
              <td class="px-6 py-4">
                  Red
              </td>
              <td class="px-6 py-4">
                  Wearables
              </td>
              <td class="px-6 py-4">
                  $999
              </td>
              <td class="px-6 py-4">
                  <a href="#" class="font-medium text-white hover:underline">Edit</a>
              </td>
          </tr>
      </tbody>
  </table>
</div>


<div class="p-6">
  <a href="{{ route('event.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 focus:bg-blue-700">Add new events</a>
</div>