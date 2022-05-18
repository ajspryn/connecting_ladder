<!-- latest jquery-->
    <script src="{{ url('/') }}/assets/js/jquery-3.6.0.min.js"></script>

    <!-- popper js-->
    <script src="{{ url('/') }}/assets/js/popper.min.js"></script>

    <!-- slick slider js -->
    <script src="{{ url('/') }}/assets/js/slick.js"></script>
    <script src="{{ url('/') }}/assets/js/custom-slick.js"></script>

    <!-- chatbox js -->
    <script src="{{ url('/') }}/assets/js/chatbox.js"></script>

    <!-- popover js for custom popover -->
    <script src="{{ url('/') }}/assets/js/popover.js"></script>

    <!-- feather icon js-->
    <script src="{{ url('/') }}/assets/js/feather.min.js"></script>

    <!-- emoji picker js-->
    <script src="{{ url('/') }}/assets/js/emojionearea.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ url('/') }}/assets/js/bootstrap.js"></script>

    <!-- lazyload js-->
    <script src="{{ url('/') }}/assets/js/lazysizes.min.js"></script>

    <!-- theme setting js-->
    <script src="{{ url('/') }}/assets/js/theme-setting.js"></script>

    <!-- Theme js-->
    <script src="{{ url('/') }}/assets/js/script.js"></script>

    <script>
        feather.replace();
        $(".emojiPicker").emojioneArea({
            inline: true,
            placement: 'absleft',
            pickerPosition: "top left",
        });

        document.addEventListener('trix-file-accept',function(e){
            e.preventDevault();
        })
    </script>

</body>

</html>
