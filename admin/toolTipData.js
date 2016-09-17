var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// COMPANIES table
COMPANIES_addTip=["",spacer+"This option allows all members of the group to add records to the 'CLIENTCOMPANY' table. A member who adds a record to the table becomes the 'owner' of that record."];

COMPANIES_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'CLIENTCOMPANY' table."];
COMPANIES_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'CLIENTCOMPANY' table."];
COMPANIES_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'CLIENTCOMPANY' table."];
COMPANIES_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'CLIENTCOMPANY' table."];

COMPANIES_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'CLIENTCOMPANY' table."];
COMPANIES_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'CLIENTCOMPANY' table."];
COMPANIES_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'CLIENTCOMPANY' table."];
COMPANIES_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'CLIENTCOMPANY' table, regardless of their owner."];

COMPANIES_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'CLIENTCOMPANY' table."];
COMPANIES_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'CLIENTCOMPANY' table."];
COMPANIES_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'CLIENTCOMPANY' table."];
COMPANIES_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'CLIENTCOMPANY' table."];

// ARTICLES table
ARTICLES_addTip=["",spacer+"This option allows all members of the group to add records to the 'ARTICLES' table. A member who adds a record to the table becomes the 'owner' of that record."];

ARTICLES_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'ARTICLES' table."];
ARTICLES_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'ARTICLES' table."];
ARTICLES_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'ARTICLES' table."];
ARTICLES_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'ARTICLES' table."];

ARTICLES_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'ARTICLES' table."];
ARTICLES_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'ARTICLES' table."];
ARTICLES_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'ARTICLES' table."];
ARTICLES_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'ARTICLES' table, regardless of their owner."];

ARTICLES_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'ARTICLES' table."];
ARTICLES_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'ARTICLES' table."];
ARTICLES_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'ARTICLES' table."];
ARTICLES_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'ARTICLES' table."];

// INVOICEVALUES table
INVOICEVALUES_addTip=["",spacer+"This option allows all members of the group to add records to the 'INVOICEVALUES' table. A member who adds a record to the table becomes the 'owner' of that record."];

INVOICEVALUES_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'INVOICEVALUES' table."];
INVOICEVALUES_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'INVOICEVALUES' table."];
INVOICEVALUES_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'INVOICEVALUES' table."];
INVOICEVALUES_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'INVOICEVALUES' table."];

INVOICEVALUES_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'INVOICEVALUES' table."];
INVOICEVALUES_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'INVOICEVALUES' table."];
INVOICEVALUES_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'INVOICEVALUES' table."];
INVOICEVALUES_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'INVOICEVALUES' table, regardless of their owner."];

INVOICEVALUES_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'INVOICEVALUES' table."];
INVOICEVALUES_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'INVOICEVALUES' table."];
INVOICEVALUES_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'INVOICEVALUES' table."];
INVOICEVALUES_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'INVOICEVALUES' table."];

// FORECASTVALUES table
FORECASTVALUES_addTip=["",spacer+"This option allows all members of the group to add records to the 'FORECASTVALUES' table. A member who adds a record to the table becomes the 'owner' of that record."];

FORECASTVALUES_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'FORECASTVALUES' table."];
FORECASTVALUES_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'FORECASTVALUES' table."];
FORECASTVALUES_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'FORECASTVALUES' table."];
FORECASTVALUES_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'FORECASTVALUES' table."];

FORECASTVALUES_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'FORECASTVALUES' table."];
FORECASTVALUES_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'FORECASTVALUES' table."];
FORECASTVALUES_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'FORECASTVALUES' table."];
FORECASTVALUES_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'FORECASTVALUES' table, regardless of their owner."];

FORECASTVALUES_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'FORECASTVALUES' table."];
FORECASTVALUES_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'FORECASTVALUES' table."];
FORECASTVALUES_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'FORECASTVALUES' table."];
FORECASTVALUES_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'FORECASTVALUES' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
