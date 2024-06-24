( function( api ) {

	// Extends our custom "ultimate-audio-streaming" section.
	api.sectionConstructor['ultimate-audio-streaming'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );