var listEngineUrl = 'http://tomcat.rs-soft.site/hackathon-app-1.0-SNAPSHOT/api/v1/cases/';
var baseItemUrl = 'http://localhost/item?id=';

var getCasesListMethod = 'cases_list';
var getCaseMethod = 'case';
var postVoteMethod = 'vote';
var getUserMethod = 'user';
var postUserMethod = 'user';

var userToken = '';

function buildCasesList(list) {
  let cases = $('#cases');
  cases.html('');
  $.each(list, function (index, item) {
    let itemUrl = baseItemUrl + item.id;
    cases.append('<div class="col-4 case">'
      + '<a href="'
      + itemUrl
      + '">'
      + '<div class="row">'
      + '<div class="col-12 case-image">'
      + '<img src="'
      + item.imagePath
      + '" class="case-image-preview"/>'
      + '</div>'
      + '<div class="col-12 case-name">'
      + item.name
      + '</div>'
      + '<div class="col-12 case-create-date">'
      + item.statDate
      + '</div>'
      + '</div>'
      + '</a>'
      + '</div>');
  });
}

function buildCase(item) {
  let cases = $('#case');
  cases.html('');
  $.each(list, function (index, item) {
    let itemUrl = baseItemUrl + item.id;
    cases.append('<div class="row">'
      + '<div class="col-12 case-name">'
      + '<a href="'
      + itemUrl
      + '">'
      + item.name
      + '</a>'
      + '</div>'
      + '<div class="col-12 case-create-date">'
      + '<a href="'
      + itemUrl
      + '">'
      + item.create_date
      + '</a>'
      + '</div>'
      + '<div class="col-12 case-text">'
      + '<a href="'
      + itemUrl
      + '">'
      + item.preview
      + '</a>'
      + '</div>'
      + '</div>');
  });
}

function showError(xhr) {
  console.log(xhr);
}

function loadCases(caseType, caseCategory, caseOrder, casePage, caseCount) {
  let data = {
    token: userToken,
    method: getCasesListMethod,
      case_type: caseType,
      case_category: caseCategory,
      case_order: caseOrder,
      case_page: casePage,
      case_count: caseCount
  };

  $.ajax({
    type: 'get',
    url: listEngineUrl,
    data,
    success: function (response) {

      console.log(response);

      buildCasesList(response);


    },
    error: function (xhr) {
      showError(xhr);
    }
  })
}

function loadCase(id) {
  let data = {
    token: userToken,
    method: getCaseMethod,
    query: {
      id: id
    }
  };

  $.ajax({
    type: 'get',
    url: engineUrl,
    data,
    success: function (response) {

      let item = JSON.parse(response);

      buildCase(item);


    },
    error: function (xhr) {
      showError(xhr);
    }
  })
}

function voteCase(id, caseType) {
  let data = {
    token: userToken,
    method: postVoteMethod,
    query: {
      id: id,
      case_type: caseType
    }
  };

  $.ajax({
    type: 'post',
    url: engineUrl,
    data,
    success: function (response) {

      let item = JSON.parse(response);

      buildCase(item);


    },
    error: function (xhr) {
      showError(xhr);
    }
  })
}

function buildUserForm(item) {
  $("#user-login").val(item.user_login);
  buildUserForm(item);
}

function getUserData(id) {
  let data = {
    token: userToken,
    method: getUserMethod,
    query: {
      id: id,
      case_type: caseType
    }
  };

  $.ajax({
    type: 'get',
    url: engineUrl,
    data,
    success: function (response) {

      let item = JSON.parse(response);

      buildUserForm(item);

    },
    error: function (xhr) {
      showError(xhr);
    }
  })
}
