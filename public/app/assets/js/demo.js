jQuery(document).ready(function($) {
  var options = {
      i18n: {
        locale: 'pt-BR'
      },
      disabledActionButtons: ['data'],
      controlOrder: [
        'text',
        'textarea'
      ]
    }, fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder(options);
});
