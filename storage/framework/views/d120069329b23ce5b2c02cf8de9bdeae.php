<script>
    // Function to preview the image for Aadhaar or PAN
    function previewImage(event, type) {
        const input = event.target;
        const previewContainer = document.getElementById(`${type}-preview-container`);
        const previewImage = document.getElementById(`${type}-preview`);
        const uploadButton = document.getElementById(`upload-${type}-button`);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block'; // Show the preview container
                uploadButton.style.display = 'none'; // Hide the upload button
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/admin/layout/helper/image-script.blade.php ENDPATH**/ ?>