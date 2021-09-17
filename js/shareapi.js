// is Web Share API supported?
if ( navigator.share ) {

    // share button click handler
    document.getElementById('share').addEventListener('click', () => {
  
      // share page information
      navigator.share({
        url: 'https://theleapcompany.in/',
        title: 'Share Covid-19 Resources with everyone',
        text: 'We try our best so that no one out their runs out of resources.'
      });
  
    });
  
  }

// is Web Share API supported?
if ( navigator.share ) {

  // share button click handler
  document.getElementById('share_footer').addEventListener('click', () => {

    // share page information
    navigator.share({
      url: 'https://theleapcompany.in/',
      title: 'Share Covid-19 Resources with everyone',
      text: 'We try our best so that no one out their runs out of resources.'
    });

  });

}