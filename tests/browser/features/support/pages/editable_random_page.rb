class EditableRandomPage < RandomPage
  h1(:title, id: 'firstHeading')
  div(:cta, id: 'mw-gettingstarted-cta-editable-main-page')
  a(:edit_this_page, id: 'mw-gettingstarted-editable-main-edit-page')
  a(:edit_suggested_page, id: 'mw-gettingstarted-editable-main-fix-pages')
  a(:no_thanks, class: 'mw-gettingstarted-cta-leave-link')
  a(:create_account, css: '#pt-createaccount a')
end
