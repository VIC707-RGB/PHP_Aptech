var CreateOrUpdateChampion = {
    Init: function () {
        CreateOrUpdateChampion.InitSelect2();
        CreateOrUpdateChampion.InitEditor();
        CreateOrUpdateChampion.RegisterEvent();

    },
    RegisterEvent: function () {
        $('.add-skill').off('click').on('click', function () {
            var html = `
            <div class="row skill-item mt-3">
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="Please insert skill descriptions">
                </div>
                <div class="col-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary add-skill">+</button>
                        <button type="button" class="btn btn-danger remove-skill">-</button>
                        
                    </div>
                </div>
            </div>
            `;
            $('.skills-container').append(html);
            CreateOrUpdateChampion.RegisterEvent();
        })
        $('.remove-skill').off('click').on('click', function () {
            if ($('.skill-item').length > 1) {
                $(this).closest('.skill-item').remove();
                CreateOrUpdateChampion.RegisterEvent()
            }

        })
        $('.file-contaier').off('click').on('click', function () {
            $('.file-input-item').click()
        })
        $('.file-input-item').off('change').on('change', function () {
            var fileInput = $(this)[0].files[0];
            var reader = new FileReader();

            reader.onload = function (event) {
                var base64String = event.target.result;

                // Thực hiện các thao tác mong muốn với mã base64 ở đây
                console.log('Mã base64 của tệp tin:', base64String);

                $('.file-contaier').html('').html('<img src="' + base64String + '" class="img-fluid" style="max-height:100%">')
            };

            reader.readAsDataURL(fileInput);
        })
    },
    InitSelect2: function () {
        $('.select2-roles').select2();
    },
    InitEditor: function () {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(function (editor) {
                editor.model.document.on('change:data', () => {
                    // Mỗi khi dữ liệu thay đổi trong CKEditor 5, cập nhật giá trị trong TextArea
                    console.log(editor.getData());
                    document.querySelector('#mainStory').value = editor.getData();
                });
                // Lắng nghe sự kiện keydown trong CKEditor 5
                editor.editing.view.document.on('keydown', (event, data) => {
                    document.querySelector('#mainStory').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });

        CreateOrUpdateChampion.RegisterEvent();
    }
}
CreateOrUpdateChampion.Init();