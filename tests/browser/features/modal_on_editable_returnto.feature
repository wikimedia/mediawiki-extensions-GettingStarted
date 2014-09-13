@en.wikipedia.beta.wmflabs.org @firefox
Feature: Modal on editable returnto page

	Scenario: User sees modal call to action after registration
		Given I am at a random page
		When I register
		Then I should be returned to the same article
			And I should see a modal call to action
			And one action is edit this page
			And one action is edit a suggested page
			And one action is no thanks, maybe later
