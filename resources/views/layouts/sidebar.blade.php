<div class="bg-[#090B13] pl-[20px] pr-[20px] 2xl:pl-[20px] 2xl:pr-[20px] py-[10px] 2xl:py-[10px] pt-[2px] sidebar">
   <div class="mb-[20px] 2xl:mb-[50px]">
      <a href="{{ route('admin.dashboard.index') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='admin.dashboard.index') active @endif">
         <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
               d="M8.07233 2.74306V6.32458C8.07233 6.62113 8.01377 6.91477 7.9 7.18863C7.78624 7.46249 7.61951 7.71119 7.40938 7.92046C7.19926 8.12973 6.94988 8.29544 6.67555 8.40808C6.40123 8.52072 6.10735 8.57808 5.8108 8.57687H2.24775C1.952 8.57866 1.65893 8.52072 1.38611 8.40652C1.1133 8.29232 0.866345 8.1242 0.660067 7.91226C0.450636 7.70457 0.284786 7.45715 0.172245 7.18452C0.0597036 6.91188 0.00273738 6.61952 0.00468708 6.32458V2.75229C0.00468207 2.15654 0.240709 1.58506 0.661101 1.16294C1.08149 0.740814 1.652 0.502442 2.24775 0.5H5.82003C6.11548 0.500284 6.40793 0.559171 6.68045 0.673253C6.95298 0.787334 7.20017 0.954343 7.40771 1.16461C7.6177 1.37044 7.78462 1.61601 7.89872 1.88701C8.01283 2.15802 8.07184 2.44902 8.07233 2.74306ZM17.9953 2.75229V6.32458C17.9906 6.91885 17.753 7.48756 17.3336 7.90865C16.9143 8.32974 16.3465 8.56964 15.7523 8.57687H12.1708C11.5737 8.57322 11.0013 8.3383 10.5738 7.92149C10.365 7.71148 10.1996 7.46233 10.0871 7.18831C9.97464 6.91429 9.91734 6.62078 9.91847 6.32458V2.75229C9.91772 2.4567 9.97614 2.16394 10.0903 1.89127C10.2044 1.6186 10.372 1.37153 10.5831 1.16461C10.7906 0.954343 11.0378 0.787334 11.3103 0.673253C11.5829 0.559171 11.8753 0.500284 12.1708 0.5H15.743C16.3389 0.504825 16.909 0.743669 17.3303 1.16501C17.7517 1.58636 17.9905 2.15644 17.9953 2.75229ZM17.9953 12.6753V16.2476C17.9906 16.8419 17.753 17.4106 17.3336 17.8317C16.9143 18.2527 16.3465 18.4927 15.7523 18.4999H12.1708C11.5699 18.506 10.9904 18.2775 10.5554 17.863C10.3457 17.6536 10.1797 17.4045 10.0672 17.1304C9.9547 16.8562 9.89786 16.5624 9.90001 16.266V12.6938C9.89926 12.3982 9.95768 12.1054 10.0718 11.8327C10.186 11.5601 10.3535 11.313 10.5646 11.1061C10.7722 10.8958 11.0194 10.7288 11.2919 10.6147C11.5644 10.5006 11.8569 10.4418 12.1523 10.4415H15.7246C16.3204 10.4463 16.8905 10.6851 17.3119 11.1065C17.7332 11.5278 17.9721 12.0979 17.9769 12.6938L17.9953 12.6753ZM8.07233 12.6845V16.2568C8.06506 16.8527 7.82389 17.4218 7.40081 17.8414C6.97774 18.261 6.40668 18.4975 5.8108 18.4999H2.24775C1.95284 18.5011 1.66062 18.4439 1.38792 18.3316C1.11523 18.2193 0.867473 18.0542 0.658942 17.8456C0.450411 17.6371 0.285235 17.3893 0.172943 17.1166C0.0606508 16.844 0.00346592 16.5517 0.00468708 16.2568V12.6845C0.0070651 12.0887 0.243571 11.5176 0.66319 11.0945C1.08281 10.6715 1.65191 10.4303 2.24775 10.423H5.82003C6.41837 10.4291 6.99094 10.6674 7.41695 11.0876C7.83795 11.5123 8.0736 12.0865 8.07233 12.6845Z"
               fill="currentColor" />
         </svg>
         Dashboard
      </a>
      <a href="{{ route('admin.report.statistics') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] active:text-[#ce68ce] @if(Route::currentRouteName()=='admin.report.statistics') active @endif">
         <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_70_1748" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="21">
               <path d="M1.44922 2.85C1.44922 2.49196 1.59145 2.14858 1.84462 1.89541C2.0978 1.64223 2.44118 1.5 2.79922 1.5H13.5992C13.9573 1.5 14.3006 1.64223 14.5538 1.89541C14.807 2.14858 14.9492 2.49196 14.9492 2.85V19.5H2.79922C2.44118 19.5 2.0978 19.3578 1.84462 19.1046C1.59145 18.8514 1.44922 18.508 1.44922 18.15V2.85Z" fill="white" stroke="white" stroke-width="2" stroke-linejoin="round"/>
               <path d="M14.9492 10.5C14.9492 10.2613 15.044 10.0324 15.2128 9.86358C15.3816 9.6948 15.6105 9.59998 15.8492 9.59998H17.6492C17.8879 9.59998 18.1168 9.6948 18.2856 9.86358C18.4544 10.0324 18.5492 10.2613 18.5492 10.5V18.15C18.5492 18.508 18.407 18.8514 18.1538 19.1046C17.9006 19.3577 17.5573 19.5 17.1992 19.5H14.9492V10.5Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
               <path d="M4.14844 5.09998H7.74844M4.14844 8.24998H9.54844" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </mask>
            <g mask="url(#mask0_70_1748)">
               <path d="M-0.800781 -0.299988H20.7992V21.3H-0.800781V-0.299988Z" fill="currentColor"/>
            </g>
         </svg>
         Reports
      </a>
      <a href="{{ route('admin.users.affiliates') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='admin.users.affiliates') active @endif">
         <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.5 1.49859C16.8676 1.4987 17.2306 1.57986 17.5632 1.73628C17.8958 1.8927 18.1898 2.12055 18.4244 2.40358C18.6589 2.68662 18.8281 3.01788 18.9199 3.37378C19.0118 3.72968 19.0241 4.10146 18.9558 4.46263C18.8876 4.82381 18.7406 5.1655 18.5252 5.46336C18.3099 5.76123 18.0315 6.00794 17.7099 6.18593C17.3883 6.36392 17.0314 6.4688 16.6646 6.49312C16.2979 6.51743 15.9303 6.46057 15.588 6.32659L11.032 10.8816C11.7806 11.9667 12.1129 13.2853 11.968 14.5956L14.592 15.3826C14.9634 14.9445 15.4743 14.6476 16.0388 14.5419C16.6033 14.4362 17.187 14.528 17.6918 14.8021C18.1965 15.0761 18.5915 15.5155 18.8104 16.0465C19.0292 16.5775 19.0586 17.1677 18.8935 17.7178C18.7284 18.2679 18.379 18.7443 17.9039 19.0671C17.4288 19.3898 16.8571 19.5392 16.2849 19.49C15.7127 19.4408 15.1748 19.1961 14.7618 18.797C14.3488 18.3979 14.0858 17.8688 14.017 17.2986L11.394 16.5106C10.8395 17.5922 9.94235 18.4597 8.84269 18.9775C7.74303 19.4953 6.50281 19.6343 5.31583 19.3727C4.12884 19.111 3.06195 18.4636 2.28185 17.5315C1.50176 16.5994 1.0524 15.4351 1.004 14.2206L1 13.9986L1.004 13.7776C1.04297 12.8042 1.33979 11.8586 1.86408 11.0376C2.38837 10.2165 3.12133 9.54945 3.988 9.10459L3.2 6.48059C2.62367 6.41101 2.08953 6.14303 1.6892 5.72264C1.28887 5.30224 1.04733 4.75563 1.006 4.17659L1 3.99859L1.005 3.83459C1.03206 3.42258 1.16074 3.02368 1.37956 2.67353C1.59838 2.32338 1.90052 2.03288 2.25899 1.82797C2.61746 1.62307 3.0211 1.51014 3.43386 1.49928C3.84662 1.48842 4.25564 1.57996 4.62439 1.76572C4.99314 1.95149 5.31014 2.2257 5.54707 2.56385C5.78401 2.90201 5.93349 3.29359 5.98218 3.70361C6.03087 4.11363 5.97725 4.52933 5.8261 4.91357C5.67496 5.29781 5.43099 5.63863 5.116 5.90559L5.903 8.53059C7.21328 8.38572 8.53188 8.71803 9.617 9.46659L14.172 4.91059C14.0782 4.67133 14.0219 4.41903 14.005 4.16259L14 3.99859L14.005 3.83459C14.0466 3.20124 14.3276 2.60744 14.791 2.17363C15.2543 1.73983 15.8653 1.4985 16.5 1.49859Z" fill="currentColor"/>
         </svg>
         Affiliates
      </a>
      <a href="{{ route('admin.users.appblocker') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='admin.users.appblocker') active @endif">
         <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.636 19.9798L10.6257 19.9817L10.5593 20.0145L10.5406 20.0182L10.5275 20.0145L10.4611 19.9817C10.4511 19.9786 10.4436 19.9802 10.4386 19.9864L10.4349 19.9957L10.419 20.3962L10.4236 20.4149L10.433 20.427L10.5303 20.4963L10.5443 20.5L10.5556 20.4963L10.6528 20.427L10.6641 20.4121L10.6678 20.3962L10.6519 19.9967C10.6494 19.9867 10.6441 19.9811 10.636 19.9798ZM10.8839 19.8741L10.8718 19.876L10.6987 19.963L10.6893 19.9724L10.6865 19.9826L10.7034 20.3849L10.708 20.3962L10.7155 20.4027L10.9036 20.4897C10.9154 20.4928 10.9245 20.4903 10.9307 20.4822L10.9344 20.4691L10.9026 19.8947C10.8995 19.8835 10.8933 19.8766 10.8839 19.8741ZM10.215 19.876C10.2109 19.8735 10.206 19.8727 10.2013 19.8737C10.1966 19.8748 10.1924 19.8776 10.1898 19.8816L10.1842 19.8947L10.1523 20.4691C10.153 20.4803 10.1583 20.4878 10.1682 20.4916L10.1823 20.4897L10.3703 20.4027L10.3797 20.3952L10.3834 20.3849L10.3993 19.9826L10.3965 19.9714L10.3872 19.9621L10.215 19.876Z" fill="#918191"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.89641 0.707133C7.06574 0.405857 8.2956 0.433707 9.45009 0.787606C10.6046 1.1415 11.6388 1.80768 12.4384 2.71251C13.238 3.61735 13.7719 4.72562 13.9811 5.91488C14.1903 7.10414 14.0667 8.32808 13.6238 9.45147L17.9263 13.0935C18.2526 13.3692 18.5181 13.7097 18.7061 14.0934C18.894 14.477 19.0003 14.8955 19.0181 15.3224C19.036 15.7492 18.9651 16.1751 18.8099 16.5731C18.6546 16.9712 18.4185 17.3326 18.1164 17.6347C17.8142 17.9367 17.4527 18.1728 17.0547 18.3279C16.6566 18.4831 16.2307 18.5539 15.8038 18.5359C15.377 18.518 14.9585 18.4116 14.5749 18.2236C14.1913 18.0356 13.8509 17.77 13.5752 17.4436L9.93506 13.143C8.81153 13.5866 7.58723 13.7108 6.39751 13.5019C5.2078 13.293 4.09902 12.7592 3.19376 11.9595C2.2885 11.1598 1.62203 10.1253 1.26804 8.97043C0.914047 7.81555 0.886318 6.58527 1.18792 5.41562C1.23044 5.25128 1.31646 5.10142 1.43693 4.98181C1.55739 4.8622 1.70786 4.77725 1.8725 4.7359C2.03715 4.69455 2.20989 4.69832 2.37258 4.74681C2.53527 4.7953 2.68188 4.88673 2.79702 5.01148L5.64569 8.10525L7.79459 7.31473L8.58697 5.16303L5.49133 2.31904C5.36583 2.20394 5.27377 2.05707 5.22488 1.89395C5.176 1.73084 5.1721 1.55754 5.2136 1.39239C5.25511 1.22724 5.34047 1.07638 5.46066 0.955755C5.58085 0.83513 5.73141 0.749228 5.89641 0.707133Z" fill="currentColor"/>
         </svg>
         Fraud Tools
      </a>
      <a href="{{ route('admin.users.advertisers') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce]  @if(Route::currentRouteName()=='admin.users.advertisers') active @endif">
         <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.95 13.8462H5.75V11.8462H7.75L7.95 12.5962C8.1 13.2462 7.6 13.8462 6.95 13.8462ZM16.75 15.3462C16.75 15.3462 10.85 11.8462 7.75 11.8462V4.8462C10.65 4.8462 16.75 1.3462 16.75 1.3462V15.3462Z" fill="currentColor"/>
            <path d="M2.75 10.8462C4.13071 10.8462 5.25 9.72691 5.25 8.3462C5.25 6.96549 4.13071 5.8462 2.75 5.8462C1.36929 5.8462 0.25 6.96549 0.25 8.3462C0.25 9.72691 1.36929 10.8462 2.75 10.8462Z" fill="currentColor"/>
            <path d="M18.2496 6.8462H16.7496V9.8462H18.2496C19.0996 9.8462 19.7496 9.1962 19.7496 8.3462C19.7496 7.4962 19.0996 6.8462 18.2496 6.8462ZM7.54961 17.9462C7.09961 18.2462 6.29961 18.5462 5.24961 18.6462C4.94961 18.6962 4.64961 18.4962 4.54961 18.1462L2.34961 11.2962C2.34961 11.2962 6.74961 8.1962 6.74961 11.8462C6.74961 14.5962 7.49961 16.0462 7.84961 16.5962C8.09961 16.9462 8.09961 17.3962 7.84961 17.7462C7.74961 17.8462 7.64961 17.8962 7.54961 17.9462Z" fill="currentColor"/>
            <path d="M2.75 11.8462H7.75V4.8462H2.75C2.2 4.8462 1.75 5.2962 1.75 5.8462V10.8462C1.75 11.3962 2.2 11.8462 2.75 11.8462Z" fill="currentColor"/>
            <path d="M17.25 16.3462C16.7 16.3462 16.25 15.8962 16.25 15.3462V1.3462C16.25 0.796199 16.7 0.346199 17.25 0.346199C17.8 0.346199 18.25 0.796199 18.25 1.3462V15.3462C18.25 15.8962 17.8 16.3462 17.25 16.3462Z" fill="currentColor"/>
         </svg>
         Advertisers
      </a>
      <a href="{{ route('template') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='template') active @endif">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 16 15" fill="none">
           <path d="M15 1H1V3H15V1Z" fill="currentColor"/>
           <path d="M1 5H3V15H1V5Z" fill="currentColor"/>
           <path d="M5 13H15V15H5V13Z" fill="currentColor"/>
           <path d="M15 9H5V11H15V9Z" fill="currentColor"/>
           <path d="M5 5H15V7H5V5Z" fill="currentColor"/>
           </svg>
         Template
      </a>
      {{-- <a href="{{ route('report.status') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='report.status') active @endif">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 16 15"  fill="none">
            <path d="M14 0H2V4H14V0Z" fill="currentColor"/>
            <path d="M2 6H7V10H2V6Z" fill="currentColor"/>
            <path d="M2 12H7V16H2V12Z" fill="currentColor"/>
            <path d="M9 12H14V16H9V12Z" fill="currentColor"/>
            <path d="M14 6H9V10H14V6Z" fill="currentColor"/>
            </svg>
         Report Status
      </a> --}}
      <a href="{{ route('settings') }}"
         class="group flex items-center gap-[10px] px-[10px] py-[10px] text-[16px] font-[400] text-[#918191] hover:text-[#ce68ce] @if(Route::currentRouteName()=='settings') active @endif">
         <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.94214 19.5C8.53714 19.5 8.18854 19.365 7.89634 19.095C7.60414 18.825 7.42774 18.495 7.36714 18.105L7.16464 16.62C6.96964 16.545 6.78604 16.455 6.61384 16.35C6.44164 16.245 6.27274 16.1325 6.10714 16.0125L4.71214 16.5975C4.33714 16.7625 3.96214 16.7775 3.58714 16.6425C3.21214 16.5075 2.91964 16.2675 2.70964 15.9225L1.65214 14.0775C1.44214 13.7325 1.38214 13.365 1.47214 12.975C1.56214 12.585 1.76464 12.2625 2.07964 12.0075L3.27214 11.1075C3.25714 11.0025 3.24964 10.9011 3.24964 10.8033V10.1958C3.24964 10.0986 3.25714 9.9975 3.27214 9.8925L2.07964 8.9925C1.76464 8.7375 1.56214 8.415 1.47214 8.025C1.38214 7.635 1.44214 7.2675 1.65214 6.9225L2.70964 5.0775C2.91964 4.7325 3.21214 4.4925 3.58714 4.3575C3.96214 4.2225 4.33714 4.2375 4.71214 4.4025L6.10714 4.9875C6.27214 4.8675 6.44464 4.755 6.62464 4.65C6.80464 4.545 6.98464 4.455 7.16464 4.38L7.36714 2.895C7.42714 2.505 7.60354 2.175 7.89634 1.905C8.18914 1.635 8.53774 1.5 8.94214 1.5H11.0571C11.4621 1.5 11.811 1.635 12.1038 1.905C12.3966 2.175 12.5727 2.505 12.6321 2.895L12.8346 4.38C13.0296 4.455 13.2135 4.545 13.3863 4.65C13.5591 4.755 13.7277 4.8675 13.8921 4.9875L15.2871 4.4025C15.6621 4.2375 16.0371 4.2225 16.4121 4.3575C16.7871 4.4925 17.0796 4.7325 17.2896 5.0775L18.3471 6.9225C18.5571 7.2675 18.6171 7.635 18.5271 8.025C18.4371 8.415 18.2346 8.7375 17.9196 8.9925L16.7271 9.8925C16.7421 9.9975 16.7496 10.0989 16.7496 10.1967V10.8033C16.7496 10.9011 16.7346 11.0025 16.7046 11.1075L17.8971 12.0075C18.2121 12.2625 18.4146 12.585 18.5046 12.975C18.5946 13.365 18.5346 13.7325 18.3246 14.0775L17.2446 15.9225C17.0346 16.2675 16.7421 16.5075 16.3671 16.6425C15.9921 16.7775 15.6171 16.7625 15.2421 16.5975L13.8921 16.0125C13.7271 16.1325 13.5546 16.245 13.3746 16.35C13.1946 16.455 13.0146 16.545 12.8346 16.62L12.6321 18.105C12.5721 18.495 12.396 18.825 12.1038 19.095C11.8116 19.365 11.4627 19.5 11.0571 19.5H8.94214ZM10.0446 13.65C10.9146 13.65 11.6571 13.3425 12.2721 12.7275C12.8871 12.1125 13.1946 11.37 13.1946 10.5C13.1946 9.63 12.8871 8.8875 12.2721 8.2725C11.6571 7.6575 10.9146 7.35 10.0446 7.35C9.15964 7.35 8.41324 7.6575 7.80544 8.2725C7.19764 8.8875 6.89404 9.63 6.89464 10.5C6.89524 11.37 7.19914 12.1125 7.80634 12.7275C8.41354 13.3425 9.15964 13.65 10.0446 13.65Z" fill="currentColor"/>
         </svg>
         Settings
      </a>
   </div>
</div>