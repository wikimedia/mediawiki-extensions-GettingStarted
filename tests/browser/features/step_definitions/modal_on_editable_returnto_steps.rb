Given(/^I have just registered$/) do
	visit(LoginPage).login_with(ENV["MEDIAWIKI_USER"], ENV["MEDIAWIKI_PASSWORD"])
end

Given(/^I have been returned to an editable page$/) do
	visit(EditableReturnToPage)
end

Then(/^I should see a modal call to action$/) do
	expect(on(EditableReturnToPage).cta_element.when_present).to be_visible
end

Then(/^one action is edit this page$/) do
	expect(on(EditableReturnToPage).edit_this_page_element).to be_visible
end

Then(/^one action is edit a suggested page$/) do
	expect(on(EditableReturnToPage).edit_suggested_page_element).to be_visible
end

Then(/^one action is no thanks, maybe later$/) do
	expect(on(EditableReturnToPage).no_thanks_element).to be_visible
end
