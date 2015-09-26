When(/^I register$/) do
  @original_title = on(EditableRandomPage).title

  on(EditableRandomPage).create_account_element.click
  on(RegistrationPage).register_user "Test Account #{@random_string}"
end

Then(/^I should be returned to the same article$/) do
  expect(on(EditableRandomPage).title).to eq @original_title
end

Then(/^I should see a modal call to action$/) do
  expect(on(EditableRandomPage).cta_element.when_present).to be_visible
end

Then(/^one action is edit this page$/) do
  expect(on(EditableRandomPage).edit_this_page_element).to be_visible
end

Then(/^one action is edit a suggested page$/) do
  expect(on(EditableRandomPage).edit_suggested_page_element).to be_visible
end

Then(/^one action is no thanks, maybe later$/) do
  expect(on(EditableRandomPage).no_thanks_element).to be_visible
end
