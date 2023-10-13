<!-- This becomes the form. -->
<div id="formio-form"></div>

<script lang="text/javascript">
    window.onload = function() {
        // The third param's readOnly flag turns off buttons & marks all fields as readonly.
        Formio.createForm(document.getElementById('formio-form'), {!! $definition !!}, {readOnly: true}).then(function (form) {
            form.submission = {
                data: {!! $data !!},
        };
    };
</script>