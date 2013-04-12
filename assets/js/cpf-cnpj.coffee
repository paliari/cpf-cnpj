
onValidaCPFCNPJ = (obj)->
  len = obj.val().replace(/[^0-9]/g, "").length
  label = obj.data("label")
  if len is 14 or (len is 11 and label is "CPF")
    valido = validaCPFCNPJ(obj.val())
    onSetRequireValid(obj, valido, "#{label} inválido!")
  else
    valido = false
  return valido

onChangeMask = ->
  obj = $(this)
  if obj.val() is obj.prop "placeholder"
    obj.val("")

onSetRequireValid = (obj, valido, msg)->
  if (not valido and not obj.prop("disabled"))
    obj.closest(".control-group").addClass("error")
    obj.tooltip(title:msg)
    obj.tooltip("show")
  else
    obj.closest(".control-group").removeClass("error")
    obj.tooltip("destroy")

jQuery ($)->
  $("#main, #poupap_base, [data-group-cpf-cnpj]").on "click", "[data-group-cpf-cnpj-radio]", ->
    radio = $(this)
    radio.closest("[data-group-cpf-cnpj]")
      .find(".input-prepend")
      .find("i").attr("class", if radio.attr("value")=="cpf" then "icon-user" else "icon-briefcase")
      .end().end()
      .find("input:text").hide().prop("disabled", true).tooltip("destroy")
      .filter("[data-"+radio.attr('value')+"]").show().prop("disabled", false)
      .get(0).focus()

  $("body").on("focus", "[data-mask]", onChangeMask)
    .on("blur", "[data-mask]", onChangeMask)
    .on("keyup", "[data-mask]", onChangeMask)
    .on("input", "[data-mask]", onChangeMask)
    .on("change", "[data-mask]", onChangeMask)
    .on("click", "[data-mask]", onChangeMask)

  $("body").on "blur", "[data-cpf],[data-cnpj]", ->
    onValidaCPFCNPJ $(this)
