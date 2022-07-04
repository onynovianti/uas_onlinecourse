<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
</head>
<script>
      function addRequirements(){
        var newdiv = document.createElement('div');
        //newdiv.id = dynamicInput[counter];
        newdiv.className="input-group mb-3";
        newdiv.innerHTML = "<input type='text' class='form-control' name='requirements[]' placeholder='Enter requirements'> <input type='button' value='Remove' onClick='removeRequirements(this);' class='btn btn-outline-danger'>";
        document.getElementById('req').appendChild(newdiv);
      }

      function editRequirements(){
        var newdiv = document.createElement('div');
        //newdiv.id = dynamicInput[counter];
        newdiv.className="input-group mb-3";
        newdiv.innerHTML = "<input form='add_form'  type='text' class='form-control' name='requirements[]' placeholder='Enter requirements'> <input type='button' value='Remove' onClick='removeRequirements(this);' class='btn btn-outline-danger'>";
        document.getElementById('req').appendChild(newdiv);
      }

      function editOutcomes(){
        var newdiv = document.createElement('div');
        //newdiv.id = dynamicInput[counter];
        newdiv.className="input-group mb-3";
        newdiv.innerHTML = "<input form='add_form'  type='text' class='form-control' name='outcomes[]' placeholder='Enter requirements'> <input type='button' value='Remove' onClick='removeRequirements(this);' class='btn btn-outline-danger'>";
        document.getElementById('out').appendChild(newdiv);
      }

      function removeRequirements(btn){
          btn.parentNode.remove();
      }

      function addOutcomes(){
        var newdiv = document.createElement('div');
        //newdiv.id = dynamicInput[counter];
        newdiv.className="input-group mb-3";
        newdiv.innerHTML = "<input type='text' class='form-control' name='outcomes[]' placeholder='Enter outcomes'> <input type='button' value='Remove' onClick='removeOutcomes(this);' class='btn btn-outline-danger'>";
        document.getElementById('out').appendChild(newdiv);
      }

      function removeOutcomes(btn){
          btn.parentNode.remove();
      }

      function cekRequreiments() {
        // Get the checkbox
        var checkBox = document.getElementById("harga");
        // Get the output text
        var text = document.getElementById("price");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
          text.style.display = "none";
        } else {
          text.style.display = "block";
        }
      }

      function cekDiscount() {
        // Get the checkbox
        var checkBox = document.getElementById("diskon");
        // Get the output text
        var text = document.getElementById("discount");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
          text.style.display = "block";
        } else {
          text.style.display = "none";
        }
      }
      
      var section = [];

      // Fungsi add section
      function addSection(){
        var inputSection = document.getElementsByName("section")[0].value;
        if(!inputSection) alert('Section harus diisi!');
        else{
          // HIDE MODAL
          hideModalSection();

          // ADD SECTION
          section.push(inputSection);
          var newdiv = document.createElement("div");
          newdiv.className = "card card-secondary";
          newdiv.innerHTML = "<div class='card-header'><h3 class='card-title'>"+inputSection+"</h3></div><div class='card-body'></div>";
          document.getElementById('sect').appendChild(newdiv);
        }
      }

      function getval(sel){
        var element = document.getElementById('can-remove');
        if(element){
          element.remove();
        }
            var newdiv = document.createElement("div");
            newdiv.setAttribute("id","can-remove");
            var jenis = sel.value;

            if(jenis == 'Youtube Video'){
              newdiv.innerHTML = '<input type="text" name="materi" class="form-control" placeholder="https://www.youtube.com/watch?v=9LWmM-3lb84">';
              document.getElementById('tambahan').appendChild(newdiv);
            }else if(jenis == 'Video File'){
              newdiv.className = 'custom-file';
              newdiv.innerHTML='<input type="file" class="custom-file-input" id="exampleInputFile" name="materi" accept="video/*"><label class="custom-file-label" for="exampleInputFile">Choose file</label>';
              document.getElementById('tambahan').appendChild(newdiv);
            }else if(jenis == 'Document File'){
              newdiv.className = 'custom-file';
              newdiv.innerHTML='<input type="file" class="custom-file-input" id="exampleInputFile" name="materi" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"><label class="custom-file-label" for="exampleInputFile">Choose file</label>';
              document.getElementById('tambahan').appendChild(newdiv);
            }else{
              newdiv.className = 'custom-file';
              newdiv.innerHTML='<input type="file" class="custom-file-input" id="exampleInputFile" name="materi" accept="image/*"><label class="custom-file-label" for="exampleInputFile">Choose file</label>';
              document.getElementById('tambahan').appendChild(newdiv);
            } 
        }

        function getPertemuan(){
          var element = document.getElementsByClassName('pertemuan').getAttribute('pertemuan');
          alert(element);
        }

        function getOption(){
          var select_element = document.getElementById('select_pertemuan');
          let options = select_element.getElementsByTagName('option');

          for (var i=options.length; i--;) {
              select_element.removeChild(options[i]);
          }

          for(let i=0; i<section.length; i++){
            // opt.text = section[i];
            select_element.options.add( new Option(section[i],section[i]));
          }
        }

    </script>
<body class="hold-transition sidebar-mini layout-fixed">