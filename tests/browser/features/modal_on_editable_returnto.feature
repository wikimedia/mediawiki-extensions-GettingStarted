@en.wikipedia.beta.wmflabs.org @firefox @login
Feature: Modal on editable returnto page

	Scenario: User sees modal call to action after registration
		Given I am logged in
		And I have been returned to an editable page
		Then I should see a modal call to action
		And one action is edit this page
		And one action is edit a suggested page
		And one action is no thanks, maybe later
