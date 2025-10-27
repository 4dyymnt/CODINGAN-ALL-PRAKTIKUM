 $(document).ready(function() {
    $('#hide').click(function() {
        $('#teks').hide()
    })
    $('#show').click(function() {
        $('#teks').show()
    })
    $('#toggle').click(function() {
        $('#teks').toggle()
    })
    $('#start').click(function() {
        $('#box').animate({
        left:'200px',
        height:'250px',
        width:'250px',
       }, 1500)
    })
})