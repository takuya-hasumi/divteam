$(function() {
  // checkbox切り替え
  $('input[type="checkbox"]').change(function() {
    var check = $(this).prop('checked');
    if (check) {
      $(this).addClass("checked");
      $(this).prop('name', 'member_id');
    }
    if (!check) {
      $(this).removeClass("checked");
      $(this).prop('name', '');
    }
  });
  // セレクトボックス
  $('[name=select]').change(function() {
    var select = $(this).val();
    var txt = $('[name=select] option:selected').text();
    if (select) {
      $('[name=who_name]').prop('value', txt);
      $('[name=leader_name]').prop('value', txt);
      $('[name=team_name]').prop('value', txt);
    }
    if (!select) {
      $('[name=who_name]').prop('value', '');
      $('[name=leader_name]').prop('value', '');
      $('[name=team_name]').prop('value', '');
    }
  });
});
