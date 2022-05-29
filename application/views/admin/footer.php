</div>
</div>
<script>
    // const coba = document.getElementById('hesus');

    // coba.addEventListener('click', function() {
    //     console.log('okee');
    // })
    const bukti = document.querySelector('.image_bukti');
    const indi = document.querySelector('.indicator');
    const remo = document.querySelector('.close');
    indi.addEventListener('click', function() {
        bukti.classList.add('active');
    })
    remo.addEventListener('click', function() {
        bukti.classList.remove('active')
    })
</script>
</body>

</html>