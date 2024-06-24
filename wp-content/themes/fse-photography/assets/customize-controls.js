( function( api ) {

	// Extends our custom "fse-photography" section.
	api.sectionConstructor['fse-photography'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );