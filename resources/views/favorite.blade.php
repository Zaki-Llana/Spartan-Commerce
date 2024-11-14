<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("List of my favorite products") }}
                </div>


                
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <!-- Products Table -->
                    <table class="w-full text-sm text-left rtl:text-right text-gray-800 table-bordered border border-gray-300">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3 border border-gray-300">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-300">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-300">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 border border-gray-300">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b border-gray-300">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border border-gray-300">
                                    Product 1
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    2
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    $20.00
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-danger">Remove</button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b border-gray-300">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border border-gray-300">
                                    Product 2
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    1
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    $15.00
                                </td>
                                <td class="px-6 py-4 border border-gray-300">
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-danger">Remove</button>
                                </td>
                            </tr>
                            <!-- Additional rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
