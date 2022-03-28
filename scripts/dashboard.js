
            const labels = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
            ];

            const earningsOverviewData = {
                labels: labels,
                datasets: [
                    {
                        label: '2020',
                        backgroundColor: 'rgb(232, 121, 249)',
                        borderColor: 'rgb(232, 121, 249)',
                        data: [0, 10, 5, 2, 20, 30, 45],
                    },
                    {
                    label: '2021',
                        backgroundColor: 'rgb(167, 139, 250)',
                        borderColor: 'rgb(167, 139, 250)',
                        data: [54, 46, 67, 76, 65, 45, 33],
                    },
                    {
                    label: '2022',
                        backgroundColor: 'rgb(56, 189, 248)',
                        borderColor: 'rgb(56, 189, 248)',
                        data: [34, 56, 66, 53, 34, 24, 46],
                    }
                ]
            };

            const revenueSourcesData = {
                labels: [
                    'Direct',
                    'Social',
                    'Referral'
                ],
                datasets: [{
                    label: 'Revenue Sources',
                    data: [30, 15, 55],
                    backgroundColor: [
                    'rgb(56, 189, 248)',
                    'rgb(167, 139, 250)',
                    'rgb(232, 121, 249)'
                    ],
                    hoverOffset: 4
                }]
                };

            const earningsOverviewCfg = {
                type: 'line',
                data: earningsOverviewData,
                options: {}
            };

            const revenueSourcesCfg = {
                type: 'doughnut',
                data: revenueSourcesData,
                options: {}
            };
            
            const earningsOverview = new Chart(
                document.getElementById('earningsOverview'),
                earningsOverviewCfg
            )

            const revenueSources = new Chart(
                document.getElementById('revenueSources'),
                revenueSourcesCfg
            )