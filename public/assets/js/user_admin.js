$(function () {
  $('.btn_curriculum').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_curriculum"]').tab('show');
  })

  $('.btn_basic').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_basic"]').tab('show');
  })

  $('.btn_requirements').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_requirements"]').tab('show');
  })

  $('.btn_outcomes').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_outcomes"]').tab('show');
  })

  $('.btn_pricing').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_pricing"]').tab('show');
  })

  $('.btn_media').click(function(e){
    e.preventDefault();
    $('#custom-content-below-tab a[href="#tab_media"]').tab('show');
  })

  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  $(function () {
    // Summernote
    $('.textarea').summernote()
  })

  // Datatable
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    // Checbox = 1
    $('input[type="checkbox"]').on('change', function(){
      this.value ^= 1;
  });

  // Get name of input file
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $(".custom-file-label").html(fileName);
        });
    
        hideModalSection = function()
        {
          $("#modal-section").modal("hide");
        }

        hideModalLesson = function()
        {
          $("#modal-section").modal("hide");
        }
        
        $('#modal-section').on('hidden.bs.modal', function (e) {
          $(this)
            .find("input,textarea,select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end();
        })

        $('#modal-lesson').on('hidden.bs.modal', function (e) {
          $(this)
            .find("input,textarea,select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end();
        })

        $('#modal-lesson').on('shown.bs.modal', function (e) {
          getOption();
        })        
  });