

var player;
    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        videoId: '3uNNWgbRZqM'});

      player2 = new YT.Player('player2', {
        videoId: 'bGetqbqDVaA'});

      player3 = new YT.Player('player3', {
        videoId: 'igcoDFokKzU'});

      player4 = new YT.Player('player4', {
        videoId: 'coqSU6ltlhk'});
    }
    
    $(document).on('mouseover', '#player', function() {
      player.playVideo();
    });
    $(document).on('mouseout', '#player', function() {
      player.pauseVideo();
    });

    $(document).on('mouseover', '#player2', function() {
      player2.playVideo();
    });
    $(document).on('mouseout', '#player2', function() {
      player2.pauseVideo();
    });

    $(document).on('mouseover', '#player3', function() {
      player3.playVideo();
    });
    $(document).on('mouseout', '#player3', function() {
      player3.pauseVideo();
    });

    $(document).on('mouseover', '#player4', function() {
      player4.playVideo();
    });
    $(document).on('mouseout', '#player4', function() {
      player4.pauseVideo();
    });