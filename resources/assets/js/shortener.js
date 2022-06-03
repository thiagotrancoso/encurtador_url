$(function () {
    $('#expiration').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    $('form[name="create"]').submit(function (event) {
        event.preventDefault()

        form = $(this)

        const data = {
            original_url: form.find('input[name="original_url"]').val(),
            code_url: form.find('input[name="code_url"]').val(),
            expiration: form.find('input[name="expiration"]').val()
        }

        $.post('http://localhost/api/shorten', data, function (response) {
            console.log(response)

            form.find('input[name="original_url"]').val('')
            form.find('input[name="code_url"]').val('')
            form.find('input[name="expiration"]').val('')

            $('#original_url-validation-feedback').css('display', 'none')
            $('#original_url').removeClass('is-invalid')
            $('#form-group-original_url label').css('color', '')

            Toast.fire({
                icon: "success",
                title: "Url encurtada com sucesso"
            })

            $('#shortened_url').text(response.shortened_url)
            $('#result').css('display', 'block')
        })
        .fail(function (response) {
            errors = response.responseJSON.errors

            $('#result').css('display', 'none')

            if (errors['original_url']) {
                msgError = errors['original_url'].join('\n')
                $('#original_url-validation-feedback').css('display', 'block').text(msgError)
                $('#original_url').addClass('is-invalid')
                $('#form-group-original_url label').css('color', '#dc3545')
            }
        })
    })
})
