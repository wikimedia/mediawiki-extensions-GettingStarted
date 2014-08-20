class EditableReturnToPage
	include PageObject

	include URL
	page_url URL.url("Special:Random?gettingStartedReturn=true")

	h1(:title, id: "firstHeading")
	div(:cta, id: "mw-gettingstarted-cta-editable-main-page")
	a(:edit_this_page, id: "mw-gettingstarted-editable-main-edit-page")
	a(:edit_suggested_page, id: "mw-gettingstarted-editable-main-fix-pages")
	a(:no_thanks, class: "mw-gettingstarted-cta-leave-link")
end
