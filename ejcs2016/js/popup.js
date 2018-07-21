$("body").click(function(event){
  var container = $(".modal");
  var vidURL = container.find("iframe").attr('src');
  if (!container.is(event.target) && container.has(event.target).length === 0){
    container.closest(".modal-wrap").addClass("closed");
    container.find("iframe").attr('src','');
    container.find("iframe").attr('src',vidURL);
  }
});

$(".open-modal").click(function(event){
  event.preventDefault();
  event.stopPropagation();
  $($(this).attr('href')).removeClass("closed");
});

$(".modal-close").click(function(event){
  event.preventDefault();
  var container =  $(this).closest(".modal");
  var vidURL = container.find("iframe").attr('src');
  $(this).closest(".modal-wrap").addClass("closed");
  container.find("iframe").attr('src','');
  container.find("iframe").attr('src',vidURL);
});