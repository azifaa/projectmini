<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div class="container mt-12>
    <script src="https://cdn.tailwindcss.com"></script>
 
 <div class="overflow-x-auto"> 
     <form action="<?php echo base_url('admin/aksi_Tambah_guru') ?>" enctype="multipart/form-data" 
         method="post"> 
         <div class="max-full rounded border overflow-hidden shadow-lg"> 
             <div class="px-6 py-4"> 
                 <p class="text-xl font-bold text-center">Tambah Guru</p> 
                 <div class="grid grid-cols-2 gap-4 mt-5"> 
                     <div class="mb-4"> 
                         <label class="block text-gray-700 text-sm font-bold mb-2" for="nama"> 
                             Nama Guru 
                         </label> 
                         <input 
                             class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                             id="nama" name="nama" type="text" placeholder="Nama"> 
                     </div> 
                     <div class="mb-4"> 
                         <label class="block text-gray-700 text-sm font-bold mb-2" for="nik"> 
                             NIK 
                         </label> 
                         <input 
                             class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                             id="nik" name="nik" type="number" placeholder="Nik"> 
                     </div> 
                     <div class="mb-4"> 
                         <label class="block text-gray-700 text-sm font-bold mb-2" for="gender"> 
                             Gender 
                         </label> 
                         <select name="gender" id="gender" 
                             class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                             <option selected>Pilih Gender</option> 
                             <option value="Laki-Laki">Laki-Laki</option> 
                             <option value="Perempuan">Perempuan</option> 
                         </select> 
                     </div>
                     <div class="mb-3 col-6"> 
 
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mapel"> 
                            Mapel 
                        </label> 
                        <select name="mapel" id="mapel" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                            <option selected>Pilih Mapel</option> 
                            <?php foreach($mapel as $row): ?> 
                            <option value="<?php echo $row->id ?>"> 
                                <?php echo $row->nama_mapel ?></option> 
                            <?php endforeach ?> 
                        </select> 
                    </div>
                     <button type="submit" 
                         class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-2/6"> 
                         Tambah 
                     </button> 
                 </div> 
             </div> 
         </div> 
     </form> 
 </div> 
</div> 
</div>
</head>
<body>
    
</body>
</html>