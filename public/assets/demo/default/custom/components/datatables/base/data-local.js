//== Class definition

var DatatableDataLocalDemo = function () {
	//== Private functions

	// demo initializer
	var demo = function () {

		var dataJSONArray = JSON.parse('[{"S.NO.":1,"Name":"54473-251","Email":"GT","Address":"SanPedroAyampuc","Phone":"Sanford-Halvorson","Createdon":"5/21/2016","Lastlogin":"5/21/2016","Status":1,"Type":2,"Department":2},{"S.NO.":2,"Name":"41250-308","Email":"ID","Address":"Langensari","Phone":"Denesik-Langosh","AgentName":"9BricksonParkJunction","Createdon":"4/19/2016","Lastlogin":"5/21/2016","Status":1,"Type":3,"Department":2},{"S.NO.":3,"Name":"0615-7571","Email":"HR","Address":"Slatina","Phone":"Kunze,SchneiderandCronin","AgentName":"35712SundownParkway","Createdon":"4/7/2016","Lastlogin":"5/21/2016","Status":6,"Type":3,"Department":1},{"S.NO.":4,"Name":"49349-551","Email":"RU","Address":"Novo-Peredelkino","Phone":"Jacobi-Ankunding","AgentName":"481SagePark","Createdon":"2/15/2016","Lastlogin":"5/21/2016","Status":4,"Type":2,"Department":3},{"S.NO.":5,"Name":"59779-750","Email":"ID","Address":"Bombu","Phone":"Johns-Kunze","AgentName":"59MarcyHill","Createdon":"1/30/2017","Lastlogin":"5/21/2017","Status":4,"Type":3,"Department":2},{"S.NO.":6,"Name":"63777-145","Email":"CN","Address":"Kaiyuan","Phone":"Kris,KeelingandWeimann","AgentName":"122EvergreenStreet","Createdon":"10/22/2016","Lastlogin":"10/21/2016","Status":3,"Type":3,"Department":3},{"S.NO.":7,"Name":"57520-0136","Email":"GR","Address":"Tríkala","Phone":"EffertzInc","AgentName":"3288thAvenue","Createdon":"9/3/2016","Lastlogin":"9/3/2016","Status":4,"Type":1,"Department":1},{"S.NO.":8,"Name":"0093-5200","Email":"SE","Address":"Köping","Phone":"West-Ullrich","AgentName":"48SommersJunction","Createdon":"2/10/2016","Lastlogin":"2/10/2016","Status":2,"Type":3,"Department":1},{"S.NO.":9,"Name":"14783-319","Email":"ID","Address":"Ujung","Phone":"Stiedemann-Kemmer","Createdon":"11/11/2016","Lastlogin":"11/11/2016","Status":2,"Type":3,"Department":2},{"S.NO.":10,"Name":"59011-454","Email":"CO","Address":"Salento","Phone":"Daniel-Feest","AgentName":"48004MarinersCoveCircle","Createdon":"12/15/2016","Lastlogin":"12/15/2016","Status":6,"Type":2,"Department":1}]');

		var datatable = $('.m_datatable').mDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataJSONArray,
				pageSize: 10
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				// height: 450, // datatable's body's fixed height
				footer: false // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch')
			},

			// inline and bactch editing(cooming soon)
			// editable: false,

			// columns definition
			columns: [{
				field: "S.NO.",
				title: "#",
				width: 50,
				sortable: false,
				textAlign: 'center',
        selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "Name",
				title: "Name"
			}, {
				field: "Email",
				title: "Email ID",
				responsive: {visible: 'lg'}
			}, {
				field: "Address",
				title: "Address",
				width: 100
			}, {
				field: "PhoneNo",
				title: "Phone No.",
				width: 100
			}, {
				field: "AgentName",
				title: "Agent Name",
				responsive: {visible: 'lg'}
			}, {
				field: "Createdon",
				title: "Created On",
				type: "date",
				format: "MM/DD/YYYY"
			}, {
				field: "Lastlogin",
				title: "Last Login",
				type: "date",
				format: "MM/DD/YYYY"
			}, {
				field: "Status",
				title: "Status",
				// callback function support for column rendering
				template: function (row) {
					var status = {
						1: {'title': 'Active', 'class': 'm-badge--brand'},
						2: {'title': 'InActive', 'class': ' m-badge--metal'},
						3: {'title': 'Under Review', 'class': ' m-badge--primary'}
					};
					return '<span class="m-badge ' + status[row.Status].class + ' m-badge--wide">' + status[row.Status].title + '</span>';
				}
			}, {
				field: "Type",
				title: "Type",
				// callback function support for column rendering
				template: function (row) {
					var status = {
						1: {'title': 'Admin', 'state': 'danger'},
						2: {'title': 'Agent', 'state': 'primary'}
					};
					return '<span class="m-badge m-badge--' + status[row.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
				}
			}, {
				field: "Department",
				title: "Department",
				// callback function support for column rendering
				template: function (row) {
					var status = {
						1: {'title': 'Sales', 'state': 'danger'},
						2: {'title': 'Operations', 'state': 'primary'},
						3: {'title': 'Technical', 'state': 'accent'}
					};
					return '<span class="m-badge m-badge--' + status[row.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
				}
			}, {
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row, index, datatable) {
					var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';

					return '\
						<div class="dropdown ' + dropup + '">\
							<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						  	</div>\
						</div>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">\
                            <i class="la la-edit"></i>\
                        </a>\
					';
				}
			}]
		});

		var query = datatable.getDataSourceQuery();

		$('#m_form_status').on('change', function () {
			datatable.search($(this).val(), 'Status');
		}).val(typeof query.Status !== 'undefined' ? query.Status : '');

		$('#m_form_type').on('change', function () {
			datatable.search($(this).val(), 'Type');
		}).val(typeof query.Type !== 'undefined' ? query.Type : '');

		$('#m_form_status, #m_form_type').selectpicker();

	};

	return {
		//== Public functions
		init: function () {
			// init dmeo
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	DatatableDataLocalDemo.init();
});