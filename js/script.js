document.addEventListener("DOMContentLoaded", function() {
  const toastLiveExample = document.getElementById("liveToast");
  if (toastLiveExample && "<?php echo $toastMessage ?? ''; ?>") {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastBootstrap.show();
  }
});

